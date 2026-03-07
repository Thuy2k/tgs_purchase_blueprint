/**
 * TGS Purchase Blueprint v2 — Interactivity
 * Tabs, collapsible, FIFO demo
 */
jQuery(function ($) {

    /* ── Tab switching ── */
    $(document).on('click', '.bp-tab', function () {
        var $group  = $(this).closest('.bp-tab-group');
        var target  = $(this).data('tab');

        $group.find('.bp-tab').removeClass('active');
        $(this).addClass('active');

        $group.find('.bp-tab-content').removeClass('active');
        $group.find('[data-tab-content="' + target + '"]').addClass('active');
    });

    /* ── Collapsible toggle ── */
    $(document).on('click', '.bp-toggle', function () {
        $(this).toggleClass('open');
        $(this).next('.bp-toggle-content').slideToggle(200);
    });

    /* ── FIFO Demo ── */
    window.bpFifo = {
        batches: [],
        log: [],

        init: function () {
            this.batches = [
                { id: 101, name: 'Sub-batch #101', exp: '10/2026', total: 800, sold: 200, remaining: 600, cost: 184680 },
                { id: 102, name: 'Sub-batch #102', exp: '12/2026', total: 700, sold: 0,   remaining: 700, cost: 184680 },
                { id: 103, name: 'Sub-batch #103', exp: '02/2027', total: 500, sold: 0,   remaining: 500, cost: 184680 },
            ];
            this.log = [];
            this.render();
            $('#bp-fifo-result').hide().empty();
            $('#bp-fifo-log').empty();
        },

        sell: function (qty) {
            var breakdown = [];
            var remain = qty;

            for (var i = 0; i < this.batches.length && remain > 0; i++) {
                var b = this.batches[i];
                if (b.remaining > 0) {
                    var take = Math.min(b.remaining, remain);
                    b.remaining -= take;
                    b.sold += take;
                    remain -= take;
                    breakdown.push({
                        batch_id: b.id,
                        qty: take,
                        unit_cost: b.cost,
                        exp: b.exp
                    });
                }
            }

            if (breakdown.length > 0) {
                this.log.push({ qty: qty, breakdown: breakdown });
                this.render();
                this.showResult(breakdown);
                this.showLog();
            }
        },

        render: function () {
            var html = '';
            this.batches.forEach(function (b) {
                var soldPct = (b.sold / b.total * 100).toFixed(0);
                var statusClass = b.remaining === 0 ? ' empty' : '';
                html += '<div class="bp-fifo-batch">';
                html += '  <div class="bp-fifo-label">' + b.name + ' &nbsp;<span class="bp-tag">HSD: ' + b.exp + '</span></div>';
                html += '  <div class="bp-fifo-bar">';
                html += '    <div class="bp-fifo-fill' + statusClass + '" style="width:' + Math.max(soldPct, 2) + '%">' + soldPct + '%</div>';
                html += '  </div>';
                html += '  <div class="bp-fifo-info">Tổng: ' + b.total.toLocaleString() + ' · Đã bán: ' + b.sold.toLocaleString() + ' · Còn: <strong>' + b.remaining.toLocaleString() + '</strong></div>';
                html += '</div>';
            });
            $('#bp-fifo-batches').html(html);
        },

        showResult: function (breakdown) {
            var html = '<strong>📋 batch_cost_breakdown (ghi vào ledger_item):</strong><br>';
            html += '<code>[';
            breakdown.forEach(function (item, i) {
                if (i > 0) html += ', ';
                html += '{"batch_id":' + item.batch_id + ',"qty":' + item.qty + ',"unit_cost":' + item.unit_cost.toLocaleString() + '}';
            });
            html += ']</code>';
            $('#bp-fifo-result').html(html).slideDown(200);
        },

        showLog: function () {
            var html = '<h4 style="margin-top:16px">📝 Lịch sử FIFO</h4>';
            html += '<table class="bp-table"><tr><th>#</th><th>SL bán</th><th>Chi tiết FIFO</th></tr>';
            this.log.forEach(function (entry, i) {
                html += '<tr><td>' + (i + 1) + '</td><td>' + entry.qty + '</td><td>';
                entry.breakdown.forEach(function (b) {
                    html += '<span class="bp-badge bp-badge-danger">Batch #' + b.batch_id + ': ' + b.qty + ' sp</span> ';
                });
                html += '</td></tr>';
            });
            html += '</table>';
            $('#bp-fifo-log').html(html);
        }
    };

    // Auto-init FIFO demo if present
    if ($('#bp-fifo-batches').length) {
        window.bpFifo.init();
    }

    /* ── Batch Split Demo ── */
    window.bpSplit = {
        subs: [],

        init: function () {
            this.subs = [
                { exp: '10/2026', qty: 800 },
                { exp: '12/2026', qty: 700 },
                { exp: '02/2027', qty: 500 },
            ];
            this.render();
        },

        addSub: function () {
            this.subs.push({ exp: '--/----', qty: 0 });
            this.render();
        },

        removeSub: function (idx) {
            this.subs.splice(idx, 1);
            this.render();
        },

        render: function () {
            var total = 0;
            this.subs.forEach(function (s) { total += s.qty; });

            var html = '';
            this.subs.forEach(function (s, i) {
                html += '<div class="bp-tree-child" style="display:flex;justify-content:space-between;align-items:center">';
                html += '  <div><strong>Sub-batch #' + (i + 1) + '</strong> — HSD: ' + s.exp + ' — <strong>' + s.qty.toLocaleString() + '</strong> thùng</div>';
                html += '  <button class="bp-btn bp-btn-danger bp-btn-sm" onclick="bpSplit.removeSub(' + i + ')"><i class="bx bx-x"></i></button>';
                html += '</div>';
            });
            $('#bp-split-children').html(html);

            // Validate
            var parentQty = 2000;
            var valid = total === parentQty;
            var cls = valid ? 'bp-highlight-new' : 'bp-highlight-danger';
            var icon = valid ? '✅' : '⚠️';
            $('#bp-split-validate').attr('class', 'bp-highlight ' + cls)
                .html(icon + ' SUM(sub-batch) = <strong>' + total.toLocaleString() + '</strong> / parent = <strong>' + parentQty.toLocaleString() + '</strong>' +
                    (valid ? ' — Hợp lệ!' : ' — Chưa khớp!'));
        }
    };

    if ($('#bp-split-children').length) {
        window.bpSplit.init();
    }
});
