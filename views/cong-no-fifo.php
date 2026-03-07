<?php if (!defined('ABSPATH')) exit; ?>

<div class="bp-page">

    <!-- ══════════════ HERO ══════════════ -->
    <div class="bp-hero" style="background:linear-gradient(135deg, #5a6270 0%, #8592a3 100%);">
        <div>
            <h2><i class='bx bx-calculator'></i> C7. Công Nợ NCC & FIFO</h2>
            <p>Thanh toán theo đợt nhập · Nhóm theo lô · FIFO trực quan · WAC gia quyền</p>
        </div>
    </div>

    <!-- ══════════════ CÔNG NỢ THEO ĐỢT ══════════════ -->
    <div class="bp-card">
        <h3><i class='bx bx-money'></i> Công nợ tính theo từng đợt nhập</h3>

        <div class="bp-highlight bp-highlight-new">
            💡 <strong>24/02 thay đổi:</strong> Mỗi phiếu mua = 1 bản ghi <code>supplier_payment</code>.
            Thêm <code>lot_id</code> để <strong>nhóm công nợ theo lô</strong>.
        </div>

        <div class="bp-example" style="margin-top:16px;">
            <div class="bp-example-title"><i class='bx bx-receipt'></i> Ví dụ: Công nợ lô VNM-LOT-2026-Q1</div>

            <table class="bp-table">
                <tr>
                    <th>Mã TT</th><th>Phiếu mua</th><th>Lô</th>
                    <th>Tổng phải trả</th><th>Đã trả</th><th>Còn nợ</th><th>Hạn</th><th>Trạng thái</th>
                </tr>
                <tr>
                    <td><code>TT-001</code></td>
                    <td>PM-2026-001</td>
                    <td><span class="bp-badge bp-badge-lot">lot_id=5</span></td>
                    <td>360,000,000đ</td>
                    <td>360,000,000đ</td>
                    <td><strong>0đ</strong></td>
                    <td>15/03/2026</td>
                    <td><span class="bp-badge bp-badge-lot">✅ Đủ</span></td>
                </tr>
                <tr>
                    <td><code>TT-002</code></td>
                    <td>PM-2026-002</td>
                    <td><span class="bp-badge bp-badge-lot">lot_id=5</span></td>
                    <td>360,000,000đ</td>
                    <td>200,000,000đ</td>
                    <td><strong>160,000,000đ</strong></td>
                    <td>15/04/2026</td>
                    <td><span class="bp-badge bp-badge-warning">⏳ 1 phần</span></td>
                </tr>
                <tr style="background:#f2fdf2">
                    <td colspan="3"><strong>Tổng lô VNM-Q1</strong> (WHERE lot_id=5)</td>
                    <td><strong>720,000,000đ</strong></td>
                    <td><strong>560,000,000đ</strong></td>
                    <td style="color:var(--bp-batch)"><strong>160,000,000đ</strong></td>
                    <td colspan="2"></td>
                </tr>
            </table>
        </div>

        <h4>Thống kê công nợ theo cấp</h4>
        <table class="bp-table">
            <tr><th>Cấp</th><th>Query</th><th>Ý nghĩa</th></tr>
            <tr><td>Theo đợt nhập</td><td><code>WHERE source_ledger_id = X</code></td><td>Nợ 1 phiếu mua</td></tr>
            <tr><td>Theo lô mua 🆕</td><td><code>WHERE lot_id = X</code></td><td>Tổng nợ cả lô</td></tr>
            <tr><td>Theo NCC</td><td><code>WHERE ledger_person_id = X</code></td><td>Tổng nợ NCC</td></tr>
            <tr><td>Theo hợp đồng</td><td><code>WHERE contract_id = X</code></td><td>Nợ toàn HĐ</td></tr>
        </table>
    </div>

    <!-- ══════════════ CK THANH TOÁN SỚM ══════════════ -->
    <div class="bp-card">
        <h3><i class='bx bx-time-five'></i> CK thanh toán sớm (policy_item type=6)</h3>

        <div class="bp-grid bp-grid-2">
            <div>
                <p style="font-size:14px;line-height:1.8">
                    Hạn trả chậm: <strong>30 ngày</strong><br>
                    TT trong 15 ngày → CK thêm <strong>2%</strong><br>
                    TT trong 7 ngày → CK thêm <strong>3%</strong>
                </p>
                <div class="bp-formula">
                    360,000,000 × 3% = <strong>10,800,000đ</strong> tiết kiệm nếu TT trong 7 ngày
                </div>
            </div>
            <div>
                <h4>payment_history (JSON)</h4>
                <div class="bp-json">[
  {
    <span class="k">"date"</span>: <span class="s">"2026-02-10"</span>,
    <span class="k">"amount"</span>: <span class="n">200000000</span>,
    <span class="k">"method"</span>: <span class="s">"bank"</span>,
    <span class="k">"note"</span>: <span class="s">"Đợt 1 — TT sớm 7 ngày, CK 3%"</span>
  },
  {
    <span class="k">"date"</span>: <span class="s">"2026-03-01"</span>,
    <span class="k">"amount"</span>: <span class="n">160000000</span>,
    <span class="k">"method"</span>: <span class="s">"bank"</span>,
    <span class="k">"note"</span>: <span class="s">"Đợt 2"</span>
  }
]</div>
            </div>
        </div>
    </div>

    <!-- ══════════════ FIFO DEMO ══════════════ -->
    <div class="bp-card">
        <h3><i class='bx bx-sort-down'></i> FIFO Demo — SP không tracking HSD</h3>

        <div class="bp-highlight bp-highlight-info">
            <strong>Kịch bản:</strong> Batch gốc #100 đã chia 3 sub-batch (HSD khác nhau).
            Khách mua SP → hệ thống FIFO tự trừ batch lá <strong>cũ nhất trước</strong> (HSD sớm nhất).
        </div>

        <div style="margin:16px 0;">
            <div id="bp-fifo-batches"></div>
        </div>

        <div class="bp-flex">
            <button class="bp-btn bp-btn-primary" onclick="bpFifo.sell(5)">
                <i class='bx bx-cart'></i> Bán 5 SP
            </button>
            <button class="bp-btn bp-btn-primary" onclick="bpFifo.sell(50)">
                <i class='bx bx-cart'></i> Bán 50 SP
            </button>
            <button class="bp-btn bp-btn-primary" onclick="bpFifo.sell(200)">
                <i class='bx bx-cart'></i> Bán 200 SP
            </button>
            <button class="bp-btn bp-btn-danger" onclick="bpFifo.sell(500)">
                <i class='bx bx-cart'></i> Bán 500 SP (xuyên batch!)
            </button>
            <button class="bp-btn bp-btn-outline" onclick="bpFifo.init()">
                <i class='bx bx-reset'></i> Reset
            </button>
        </div>

        <div id="bp-fifo-result"></div>
        <div id="bp-fifo-log"></div>

        <div class="bp-highlight" style="margin-top:16px;">
            <strong>Luật FIFO:</strong><br>
            1. Tìm batch LÁ (leaf) ACTIVE có SKU đang bán + còn SL tại shop<br>
            2. Sắp theo <code>batch_import_date ASC</code> (cũ nhất trước), nếu có exp_date → <code>exp_date ASC</code><br>
            3. Trừ batch cũ nhất trước → hết → trừ tiếp batch kế<br>
            4. Ghi vào <code>ledger_item.batch_cost_breakdown</code>
        </div>
    </div>

    <!-- ══════════════ WAC ══════════════ -->
    <div class="bp-card">
        <h3><i class='bx bx-math'></i> WAC — Giá vốn bình quân gia quyền</h3>

        <div class="bp-formula">
            WAC = SUM(batch_lá.remaining × batch_avg_cost) ÷ SUM(batch_lá.remaining)
        </div>

        <div class="bp-example">
            <div class="bp-example-title"><i class='bx bx-calculator'></i> Ví dụ tính WAC cho SKU001 tại shop #5</div>

            <table class="bp-table">
                <tr><th>Batch lá</th><th>Remaining</th><th>avg_cost</th><th>remaining × cost</th></tr>
                <tr>
                    <td>Sub #101 (đợt 1)</td><td>300</td><td>184,680đ</td>
                    <td>55,404,000đ</td>
                </tr>
                <tr>
                    <td>Sub #201 (đợt 2)</td><td>500</td><td>180,000đ</td>
                    <td>90,000,000đ</td>
                </tr>
                <tr style="background:#f3f3ff">
                    <td><strong>Tổng</strong></td>
                    <td><strong>800</strong></td>
                    <td></td>
                    <td><strong>145,404,000đ</strong></td>
                </tr>
            </table>

            <div class="bp-formula" style="margin-top:12px;">
                WAC = 145,404,000 ÷ 800 = <strong>181,755đ</strong>/thùng
            </div>
            <p class="bp-text-muted bp-text-center">
                Giá trị này ghi vào <code>local_product_name.weighted_avg_cost</code> — cập nhật mỗi lần nhập batch mới.
            </p>
        </div>
    </div>

    <!-- ══════════════ CÔNG THỨC KHÁC ══════════════ -->
    <div class="bp-card">
        <h3><i class='bx bx-bar-chart-alt-2'></i> Các công thức kế toán</h3>

        <div class="bp-grid bp-grid-2">
            <div class="bp-formula">
                <strong>Vòng quay tồn kho</strong><br>
                = COGS ÷ Tồn kho BQ
            </div>
            <div class="bp-formula">
                <strong>Tốc độ bán/ngày</strong><br>
                = batch_sold ÷ (NOW − import_date)
            </div>
            <div class="bp-formula">
                <strong>Biên lợi nhuận</strong><br>
                = (Giá bán BQ − avg_cost) ÷ Giá bán BQ × 100%
            </div>
            <div class="bp-formula">
                <strong>Remaining</strong><br>
                = total − sold − damaged<br>
                <small style="color:var(--bp-text)">(distributed KHÔNG trừ — chỉ đổi vị trí)</small>
            </div>
        </div>
    </div>

    <!-- ══════════════ NAV ══════════════ -->
    <div class="bp-nav">
        <a href="<?php echo tgs_bp_url('bp-chinh-sach-mua'); ?>"><i class='bx bx-arrow-back'></i> Chính Sách Mua</a>
        <a href="<?php echo tgs_bp_url('bp-chinh-sach-ban'); ?>">Chính Sách Bán <i class='bx bx-arrow-to-right'></i></a>
    </div>

</div>
