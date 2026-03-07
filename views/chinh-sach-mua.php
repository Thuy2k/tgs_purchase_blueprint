<?php if (!defined('ABSPATH')) exit; ?>

<div class="bp-page">

    <!-- ══════════════ HERO ══════════════ -->
    <div class="bp-hero" style="background:linear-gradient(135deg, #cc8800 0%, #ffab00 100%);">
        <div>
            <h2><i class='bx bx-book-content'></i> C3-C4. Chính Sách Mua Hàng</h2>
            <p>8 loại rule · Template / Clone · Gắn vào lô mua · CS = gợi ý, phiếu = sự thật</p>
        </div>
    </div>

    <!-- ══════════════ KHÁI NIỆM ══════════════ -->
    <div class="bp-card">
        <h3><i class='bx bx-bulb'></i> Chính sách mua là gì?</h3>
        <div class="bp-grid bp-grid-2">
            <div>
                <p style="font-size:15px;line-height:1.8">
                    <strong>Chính sách mua</strong> (C3) = tập hợp các <strong>quy tắc</strong> về giá, chiết khấu, tặng, combo... cho NCC.<br><br>
                    Mỗi CS có N <strong>dòng chi tiết</strong> (C4) — mỗi dòng = 1 rule cụ thể.<br><br>
                    <strong>Nguyên tắc quan trọng:</strong>
                </p>
                <div class="bp-highlight">
                    📌 CS = <strong>GỢI Ý</strong> · Phiếu mua = <strong>SỰ THẬT</strong><br>
                    Nhân viên sửa giá/SL trên phiếu thoải mái. CS chỉ auto-fill.
                </div>
            </div>
            <div>
                <div class="bp-example">
                    <div class="bp-example-title"><i class='bx bx-book-content'></i> Ví dụ: CS-VNM-202602</div>
                    <table class="bp-table">
                        <tr><td>Mã CS</td><td><strong>CS-VNM-202602</strong></td></tr>
                        <tr><td>Tên</td><td>Mua sữa Vinamilk T2/2026</td></tr>
                        <tr><td>Lô mua</td><td>VNM-LOT-2026-Q1 <span class="bp-badge bp-badge-new">MỚI</span></td></tr>
                        <tr><td>NCC</td><td>Vinamilk</td></tr>
                        <tr><td>Loại</td><td>1 = mua thường</td></tr>
                        <tr><td>Template</td><td>Không (dùng trực tiếp)</td></tr>
                        <tr><td>Số dòng</td><td>4 dòng rule</td></tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- ══════════════ 8 LOẠI RULE ══════════════ -->
    <div class="bp-card">
        <h3><i class='bx bx-list-ol'></i> 8 loại dòng chính sách (pp_item_type)</h3>

        <table class="bp-table">
            <tr><th>Type</th><th>Tên</th><th>Hiện trên phiếu?</th><th>Mô tả</th></tr>
            <tr>
                <td><span class="bp-badge bp-badge-primary">1</span></td>
                <td>Giá mua cố định</td>
                <td>✅ Có · cho sửa</td>
                <td>Giá mua từng SKU</td>
            </tr>
            <tr>
                <td><span class="bp-badge bp-badge-primary">2</span></td>
                <td>Chiết khấu %</td>
                <td>✅ Có · cho sửa %</td>
                <td>CK bậc thang theo SL</td>
            </tr>
            <tr>
                <td><span class="bp-badge bp-badge-primary">3</span></td>
                <td>CK tiền cố định</td>
                <td>✅ Có · cho sửa</td>
                <td>Trừ tiền trực tiếp</td>
            </tr>
            <tr>
                <td><span class="bp-badge bp-badge-primary">4</span></td>
                <td>Hàng tặng</td>
                <td>✅ Thêm dòng tặng</td>
                <td>Mua X tặng Y</td>
            </tr>
            <tr>
                <td><span class="bp-badge bp-badge-primary">5</span></td>
                <td>Combo</td>
                <td>✅ Thêm dòng tặng</td>
                <td>Mua A+B tặng C</td>
            </tr>
            <tr style="background:#f8f9fa">
                <td><span class="bp-badge bp-badge-warning">6</span></td>
                <td>Thanh toán sớm</td>
                <td>❌ Không</td>
                <td>Áp lúc TT công nợ</td>
            </tr>
            <tr style="background:#f8f9fa">
                <td><span class="bp-badge bp-badge-warning">7</span></td>
                <td>Tích lũy cuối kỳ</td>
                <td>❌ Không</td>
                <td>Volume rebate — quyết toán cuối kỳ</td>
            </tr>
            <tr style="background:#f8f9fa">
                <td><span class="bp-badge bp-badge-warning">8</span></td>
                <td>Đặc biệt</td>
                <td>❌ Không</td>
                <td>Toàn bộ logic JSON</td>
            </tr>
        </table>
    </div>

    <!-- ══════════════ VÍ DỤ 4 DÒNG ══════════════ -->
    <div class="bp-card">
        <h3><i class='bx bx-detail'></i> Ví dụ: 4 dòng trong CS-VNM-202602</h3>

        <div class="bp-tab-group">
            <div class="bp-tabs">
                <div class="bp-tab active" data-tab="line1">Dòng 1: Giá mua</div>
                <div class="bp-tab" data-tab="line2">Dòng 2: CK bậc thang</div>
                <div class="bp-tab" data-tab="line3">Dòng 3: Hàng tặng</div>
                <div class="bp-tab" data-tab="line4">Dòng 4: TT sớm</div>
            </div>

            <!-- Dòng 1 -->
            <div class="bp-tab-content active" data-tab-content="line1">
                <div class="bp-flex" style="margin-bottom:12px;">
                    <span class="bp-badge bp-badge-primary">type = 1</span>
                    <span class="bp-badge bp-badge-lot">Hiện trên phiếu</span>
                </div>
                <p><strong>Dòng 1:</strong> SKU001 Dielac Alpha — giá mua <strong>180,000đ</strong>/thùng</p>
                <h4>product_skus (JSON)</h4>
                <div class="bp-json">[
  { <span class="k">"sku"</span>: <span class="s">"SKU001"</span>, <span class="k">"qty_min"</span>: <span class="n">1</span>, <span class="k">"price"</span>: <span class="n">180000</span> }
]</div>
            </div>

            <!-- Dòng 2 -->
            <div class="bp-tab-content" data-tab-content="line2">
                <div class="bp-flex" style="margin-bottom:12px;">
                    <span class="bp-badge bp-badge-primary">type = 2</span>
                    <span class="bp-badge bp-badge-lot">Hiện trên phiếu</span>
                </div>
                <p><strong>Dòng 2:</strong> Mua ≥100 thùng SKU001 → CK <strong>5%</strong></p>
                <h4>discount_rules (JSON) — CK bậc thang</h4>
                <div class="bp-json">[
  { <span class="k">"from"</span>: <span class="n">100</span>,  <span class="k">"to"</span>: <span class="n">499</span>,  <span class="k">"percent"</span>: <span class="n">3</span> },
  { <span class="k">"from"</span>: <span class="n">500</span>,  <span class="k">"to"</span>: <span class="n">999</span>,  <span class="k">"percent"</span>: <span class="n">5</span> },
  { <span class="k">"from"</span>: <span class="n">1000</span>, <span class="k">"percent"</span>: <span class="n">8</span> }
]</div>
                <p class="bp-text-muted">Mua 2,000 thùng → áp CK bậc 3 = <strong>8%</strong></p>
            </div>

            <!-- Dòng 3 -->
            <div class="bp-tab-content" data-tab-content="line3">
                <div class="bp-flex" style="margin-bottom:12px;">
                    <span class="bp-badge bp-badge-primary">type = 4</span>
                    <span class="bp-badge bp-badge-lot">Thêm dòng tặng</span>
                </div>
                <p><strong>Dòng 3:</strong> Mua 100 SKU001 → tặng <strong>10 SKU003</strong></p>
                <h4>product_skus + gift_skus (JSON)</h4>
                <div class="bp-json"><span class="c">// product_skus:</span>
[{ <span class="k">"sku"</span>: <span class="s">"SKU001"</span>, <span class="k">"qty_min"</span>: <span class="n">100</span> }]

<span class="c">// gift_skus:</span>
[{ <span class="k">"sku"</span>: <span class="s">"SKU003"</span>, <span class="k">"qty"</span>: <span class="n">10</span> }]</div>
            </div>

            <!-- Dòng 4 -->
            <div class="bp-tab-content" data-tab-content="line4">
                <div class="bp-flex" style="margin-bottom:12px;">
                    <span class="bp-badge bp-badge-warning">type = 6</span>
                    <span class="bp-badge bp-badge-info">Áp lúc TT công nợ</span>
                </div>
                <p><strong>Dòng 4:</strong> TT trong 15 ngày → CK thêm <strong>2%</strong>, trong 7 ngày → CK <strong>3%</strong></p>
                <h4>payment_terms (JSON)</h4>
                <div class="bp-json">{
  <span class="k">"credit_days"</span>: <span class="n">30</span>,
  <span class="k">"early_payment"</span>: [
    { <span class="k">"within_days"</span>: <span class="n">15</span>, <span class="k">"extra_discount_percent"</span>: <span class="n">2</span> },
    { <span class="k">"within_days"</span>: <span class="n">7</span>,  <span class="k">"extra_discount_percent"</span>: <span class="n">3</span> }
  ]
}</div>
            </div>
        </div>
    </div>

    <!-- ══════════════ TEMPLATE / CLONE ══════════════ -->
    <div class="bp-card">
        <h3><i class='bx bx-copy'></i> Template & Clone</h3>

        <div class="bp-grid bp-grid-2">
            <div>
                <h4>📄 Tạo Template</h4>
                <p style="font-size:14px;line-height:1.8">
                    Set <code>policy_is_template = 1</code>.<br>
                    Template = bản mẫu tái sử dụng, không gắn vào phiếu mua.
                </p>
            </div>
            <div>
                <h4>📋 Clone từ Template</h4>
                <p style="font-size:14px;line-height:1.8">
                    Clone → tạo bản mới với <code>policy_parent_id = id gốc</code>.<br>
                    Sửa nhẹ nếu cần → dùng luôn → gắn vào lô.
                </p>
            </div>
        </div>

        <div class="bp-flow" style="justify-content:center;margin-top:16px;">
            <div class="bp-flow-box" style="border-color:var(--bp-payment)">
                Template gốc<small>is_template=1</small>
            </div>
            <span class="bp-flow-arrow">→ clone →</span>
            <div class="bp-flow-box" style="border-color:var(--bp-policy)">
                CS T2/2026<small>parent_id=gốc</small>
            </div>
            <span class="bp-flow-arrow">→ clone →</span>
            <div class="bp-flow-box" style="border-color:var(--bp-policy)">
                CS T3/2026<small>parent_id=gốc</small>
            </div>
        </div>

        <div class="bp-highlight" style="margin-top:16px;">
            📌 CS đang draft, chưa có phiếu → <strong>sửa thoải mái</strong><br>
            📌 CS đã có phiếu bám vào → <strong>KHÔNG sửa</strong> → Clone mới
        </div>
    </div>

    <!-- ══════════════ LIÊN KẾT VỚI LÔ ══════════════ -->
    <div class="bp-card">
        <h3><i class='bx bx-link-alt'></i> CS gắn vào Lô mua (24/02) <span class="bp-badge bp-badge-new">MỚI</span></h3>

        <div class="bp-flow" style="justify-content:center;">
            <div class="bp-flow-box" style="border-color:var(--bp-lot)">
                Lô VNM-Q1<small>lot_id=5</small>
            </div>
            <span class="bp-flow-arrow">← lot_id ←</span>
            <div class="bp-flow-box" style="border-color:var(--bp-policy)">
                CS-VNM-202602<small>lot_id=5</small>
            </div>
            <span class="bp-flow-arrow">→</span>
            <div style="display:flex;flex-direction:column;gap:6px;">
                <span class="bp-badge bp-badge-primary">Dòng 1: Giá 180k</span>
                <span class="bp-badge bp-badge-primary">Dòng 2: CK 5%</span>
                <span class="bp-badge bp-badge-lot">Dòng 3: Tặng 10</span>
                <span class="bp-badge bp-badge-warning">Dòng 4: TT sớm +2%</span>
            </div>
        </div>

        <p class="bp-text-muted bp-text-center" style="margin-top:12px;">
            CS → lot (FK 1 chiều) · Tạo lô trước, gắn CS sau · Lô không lưu ngược policy_id
        </p>
    </div>

    <!-- ══════════════ NAV ══════════════ -->
    <div class="bp-nav">
        <a href="<?php echo tgs_bp_url('bp-batch'); ?>"><i class='bx bx-arrow-back'></i> Batch & Sub-batch</a>
        <a href="<?php echo tgs_bp_url('bp-cong-no'); ?>">Công Nợ & FIFO <i class='bx bx-arrow-to-right'></i></a>
    </div>

</div>
