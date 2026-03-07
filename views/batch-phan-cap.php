<?php if (!defined('ABSPATH')) exit; ?>

<div class="bp-page">

    <!-- ══════════════ HERO ══════════════ -->
    <div class="bp-hero" style="background:linear-gradient(135deg, #ff3e1d 0%, #ff7043 100%);">
        <div>
            <h2><i class='bx bx-layer'></i> C5. Batch & Sub-batch — Đệ quy cha-con</h2>
            <p>Bảng trung tâm ⭐ · Tối đa 2 cấp · Chia theo HSD, size, màu · Gợi ý + thủ công</p>
        </div>
        <div class="bp-hero-right">
            <span class="bp-badge bp-badge-new" style="font-size:14px;padding:6px 16px;">🆕 Đệ quy 24/02</span>
        </div>
    </div>

    <!-- ══════════════ BATCH LÀ GÌ ══════════════ -->
    <div class="bp-card">
        <h3><i class='bx bx-bulb'></i> Batch là gì?</h3>
        <div class="bp-grid bp-grid-2">
            <div>
                <p style="font-size:15px;line-height:1.8">
                    <strong>Batch</strong> = 1 lô hàng nhập cho 1 SKU từ 1 phiếu mua.<br>
                    Sinh tự động khi duyệt phiếu mua (type=9).<br>
                    Mã tự sinh: <code>[cat_code]-[SKU]-[YYYYMMDD]-[auto]</code><br><br>
                    <strong>Sau 24/02:</strong> Batch hỗ trợ <strong>đệ quy cha-con</strong> (tối đa 2 cấp):<br>
                    • <strong>Cấp 0:</strong> Batch gốc (từ phiếu mua)<br>
                    • <strong>Cấp 1:</strong> Sub-batch (chia nhỏ theo HSD/size/màu)
                </p>
            </div>
            <div>
                <div class="bp-example">
                    <div class="bp-example-title"><i class='bx bx-layer'></i> Ví dụ: Phiếu mua 3 SP → 3 batch gốc</div>
                    <table class="bp-table">
                        <tr><th>Mã batch</th><th>SKU</th><th>SL</th></tr>
                        <tr><td><code>SUA-BOT-SKU001-20260213-001</code></td><td>Dielac Alpha</td><td>2,000</td></tr>
                        <tr><td><code>SUA-BOT-SKU002-20260213-001</code></td><td>Dielac Grow</td><td>500</td></tr>
                        <tr><td><code>SUA-NUOC-SKU003-20260213-001</code></td><td>Vinamilk tươi</td><td>1,000</td></tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- ══════════════ 5 CỘT MỚI ══════════════ -->
    <div class="bp-card">
        <h3><i class='bx bx-plus-circle'></i> 5 cột mới cho đệ quy (24/02)</h3>
        <table class="bp-table">
            <tr><th>Cột</th><th>Kiểu</th><th>Mô tả</th><th>Ví dụ</th></tr>
            <tr class="col-new">
                <td><code>lot_id</code></td><td>BIGINT</td>
                <td>Thuộc lô mua NCC nào</td><td>5 (VNM-LOT-2026-Q1)</td>
            </tr>
            <tr class="col-new">
                <td><code>parent_batch_id</code></td><td>BIGINT</td>
                <td>Batch cha (NULL = gốc)</td><td>NULL (gốc) hoặc 100 (sub)</td>
            </tr>
            <tr class="col-new">
                <td><code>batch_level</code></td><td>TINYINT</td>
                <td>0 = gốc, 1 = sub-batch</td><td>0</td>
            </tr>
            <tr class="col-new">
                <td><code>split_criteria</code></td><td>JSON</td>
                <td>Tiêu chí chia</td><td>{"by":"exp_date","value":"10/2026"}</td>
            </tr>
            <tr class="col-new">
                <td><code>is_auto_split</code></td><td>TINYINT</td>
                <td>1 = hệ thống gợi ý, 0 = thủ công</td><td>1</td>
            </tr>
        </table>
    </div>

    <!-- ══════════════ TREE VIEW DEMO ══════════════ -->
    <div class="bp-card">
        <h3><i class='bx bx-git-repo-forked'></i> Demo: Cấu trúc cây batch</h3>

        <div class="bp-tree-root">
            <div class="bp-flex-between">
                <div>
                    <strong>⭐ Batch gốc #100</strong> — SUA-BOT-SKU001-20260213-001<br>
                    <span class="bp-text-muted">level=0 · parent=NULL · lot_id=5 · total=2,000 thùng Dielac Alpha</span>
                </div>
                <div>
                    <span class="bp-badge bp-badge-danger">Cấp 0 (gốc)</span>
                </div>
            </div>
        </div>

        <div class="bp-tree-children">
            <div class="bp-tree-child">
                <div class="bp-flex-between">
                    <div>
                        <strong>Sub-batch #101</strong> — 800 thùng · HSD: 10/2026<br>
                        <span class="bp-text-muted">level=1 · parent=100 · split_criteria: {"by":"exp_date","value":"10/2026"}</span>
                    </div>
                    <span class="bp-badge bp-badge-lot">Cấp 1</span>
                </div>
            </div>
            <div class="bp-tree-child">
                <div class="bp-flex-between">
                    <div>
                        <strong>Sub-batch #102</strong> — 700 thùng · HSD: 12/2026<br>
                        <span class="bp-text-muted">level=1 · parent=100 · split_criteria: {"by":"exp_date","value":"12/2026"}</span>
                    </div>
                    <span class="bp-badge bp-badge-lot">Cấp 1</span>
                </div>
            </div>
            <div class="bp-tree-child">
                <div class="bp-flex-between">
                    <div>
                        <strong>Sub-batch #103</strong> — 500 thùng · HSD: 02/2027<br>
                        <span class="bp-text-muted">level=1 · parent=100 · split_criteria: {"by":"exp_date","value":"02/2027"}</span>
                    </div>
                    <span class="bp-badge bp-badge-lot">Cấp 1</span>
                </div>
            </div>
        </div>

        <div class="bp-formula" style="margin-top:16px;">
            SUM(sub-batch.total_qty) = 800 + 700 + 500 = <strong>2,000</strong> = parent.total_qty ✅
        </div>
    </div>

    <!-- ══════════════ CHIA BATCH TƯƠNG TÁC ══════════════ -->
    <div class="bp-card">
        <h3><i class='bx bx-cut'></i> Demo: Chia batch (tương tác)</h3>

        <div class="bp-highlight bp-highlight-info">
            <strong>Kịch bản:</strong> Batch gốc #100 có 2,000 thùng Dielac, SP tracking HSD.
            Hệ thống phát hiện 3 HSD khác nhau → gợi ý chia 3 sub-batch.
        </div>

        <div class="bp-tree-root" style="margin-top:16px;">
            <strong>⭐ Batch gốc #100</strong> — 2,000 thùng Dielac Alpha
        </div>
        <div id="bp-split-children" style="margin-left:32px;border-left:3px solid var(--bp-border);"></div>

        <div style="margin-top:12px;display:flex;gap:8px;">
            <button class="bp-btn bp-btn-success bp-btn-sm" onclick="bpSplit.addSub()">
                <i class='bx bx-plus'></i> Thêm sub-batch
            </button>
            <button class="bp-btn bp-btn-outline bp-btn-sm" onclick="bpSplit.init()">
                <i class='bx bx-reset'></i> Reset
            </button>
        </div>

        <div id="bp-split-validate" class="bp-highlight bp-highlight-new" style="margin-top:12px;"></div>
    </div>

    <!-- ══════════════ QUY TẮC ══════════════ -->
    <div class="bp-card">
        <h3><i class='bx bx-check-shield'></i> Quy tắc chia & gộp</h3>

        <div class="bp-grid bp-grid-2">
            <div>
                <h4>✂️ Chia batch (Split)</h4>
                <ul style="line-height:2;font-size:14px;">
                    <li><strong>Gợi ý tự động</strong> (is_auto_split=1): SP tracking HSD → gợi ý chia theo exp_date</li>
                    <li><strong>Thủ công</strong> (is_auto_split=0): Chia theo bất kỳ tiêu chí nào</li>
                    <li><strong>Validate bắt buộc:</strong> SUM(sub) = parent</li>
                    <li><strong>Tối đa 2 cấp</strong> — không có sub-sub-batch</li>
                    <li>Sub-batch <strong>kế thừa avg_cost</strong> từ batch cha</li>
                </ul>
            </div>
            <div>
                <h4>🔗 Gộp sub-batch (Merge)</h4>
                <div class="bp-highlight bp-highlight-danger">
                    CHỈ gộp được nếu sub-batch <strong>chưa có giao dịch</strong>:
                    <ul style="margin:8px 0 0;padding-left:20px;">
                        <li>batch_sold_quantity = 0</li>
                        <li>batch_distributed_quantity = 0</li>
                        <li>batch_damaged_quantity = 0</li>
                        <li>Không có lot B2 nào gắn batch_id = sub này</li>
                    </ul>
                </div>
                <p class="bp-text-muted" style="margin-top:8px;">
                    Nếu đã bán / rải shop / gắn lot → <strong>KHÔNG cho gộp</strong> → hiện cảnh báo.
                </p>
            </div>
        </div>
    </div>

    <!-- ══════════════ QUY TẮC HSD ══════════════ -->
    <div class="bp-card">
        <h3><i class='bx bx-calendar'></i> Quy tắc batch_exp_date</h3>
        <table class="bp-table">
            <tr><th>Tình huống</th><th>batch_exp_date</th><th>Lý do</th></tr>
            <tr><td>Batch gốc <strong>CÓ</strong> sub-batch</td><td><code>NULL</code></td><td>HSD nằm ở từng sub</td></tr>
            <tr><td>Batch gốc <strong>KHÔNG</strong> chia</td><td>HSD thực tế (hoặc NULL nếu ko tracking)</td><td>Dùng trực tiếp</td></tr>
            <tr><td>Sub-batch</td><td>HSD cụ thể (VD: 2026-10-15)</td><td>HSD riêng mỗi sub</td></tr>
        </table>
        <div class="bp-highlight" style="margin-top:12px;">
            📌 <strong>FIFO ưu tiên:</strong> sub-batch có exp_date <strong>SỚM NHẤT</strong> bán trước.
        </div>
    </div>

    <!-- ══════════════ THỐNG KÊ ĐỆ QUY ══════════════ -->
    <div class="bp-card">
        <h3><i class='bx bx-bar-chart-alt-2'></i> Thống kê đệ quy — 4 cấp</h3>

        <table class="bp-table">
            <tr><th>Cấp</th><th>Query</th><th>Ví dụ</th></tr>
            <tr>
                <td><span class="bp-badge bp-badge-lot">Sub-batch</span></td>
                <td><code>WHERE batch_id = 101</code></td>
                <td>Sub #101 → bán 200, còn 600</td>
            </tr>
            <tr>
                <td><span class="bp-badge bp-badge-danger">Batch gốc</span></td>
                <td><code>WHERE parent_batch_id = 100</code> → SUM</td>
                <td>Batch #100 = SUM(subs) = bán 500, còn 1,500</td>
            </tr>
            <tr>
                <td><span class="bp-badge bp-badge-new">Lô mua</span></td>
                <td><code>WHERE lot_id = 5 AND batch_level = 0</code> → SUM</td>
                <td>Lô VNM-Q1 = nhập 4,000, bán 1,200</td>
            </tr>
            <tr>
                <td><span class="bp-badge bp-badge-info">Hợp đồng / NCC</span></td>
                <td>JOIN lot → contract → SUM</td>
                <td>Vinamilk = tổng nhập 8,000 Q1</td>
            </tr>
        </table>
    </div>

    <!-- ══════════════ BATCH_SNAPSHOT ══════════════ -->
    <div class="bp-card">
        <h3><i class='bx bx-camera'></i> batch_snapshot — Bản chụp tĩnh</h3>
        <p class="bp-text-muted bp-mb-md">Ghi lúc tạo batch, <strong>KHÔNG BAO GIỜ thay đổi</strong>. Dùng cho báo cáo lịch sử, kiểm toán.</p>

        <div class="bp-json">{
  <span class="k">"policy_code"</span>:     <span class="s">"CS-VNM-202602"</span>,
  <span class="k">"policy_title"</span>:    <span class="s">"Mua sữa Vinamilk T2/2026"</span>,
  <span class="k">"supplier_name"</span>:   <span class="s">"Vinamilk"</span>,
  <span class="k">"supplier_code"</span>:   <span class="s">"NCC-VNM"</span>,
  <span class="k">"ledger_code"</span>:     <span class="s">"PM-2026-0213-001"</span>,
  <span class="k">"original_price"</span>:  <span class="n">180000</span>,
  <span class="k">"discount_percent"</span>: <span class="n">5</span>,
  <span class="k">"tax_percent"</span>:     <span class="n">8</span>,
  <span class="k">"final_unit_price"</span>: <span class="n">184680</span>,
  <span class="k">"gift_info"</span>:       { <span class="k">"sku"</span>: <span class="s">"SKU003"</span>, <span class="k">"qty"</span>: <span class="n">10</span>, <span class="k">"reason"</span>: <span class="s">"Mua 100 tặng 10"</span> },
  <span class="k">"lot_code"</span>:        <span class="s">"VNM-LOT-2026-Q1"</span>,
  <span class="k">"contract_code"</span>:   <span class="s">"HD-VNM-2026-001"</span>
}</div>
    </div>

    <!-- ══════════════ NAV ══════════════ -->
    <div class="bp-nav">
        <a href="<?php echo tgs_bp_url('bp-lo-mua-ncc'); ?>"><i class='bx bx-arrow-back'></i> Lô Mua NCC</a>
        <a href="<?php echo tgs_bp_url('bp-chinh-sach-mua'); ?>">Chính Sách Mua <i class='bx bx-arrow-to-right'></i></a>
    </div>

</div>
