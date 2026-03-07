<?php if (!defined('ABSPATH')) exit; ?>

<div class="bp-page">

    <!-- ══════════════ HERO ══════════════ -->
    <div class="bp-hero">
        <div>
            <h2><i class='bx bx-book-open'></i> Blueprint Mua Bán Hàng</h2>
            <p>Thế Giới Sữa — 650 cửa hàng · WordPress Multisite POS · Cập nhật 07/03/2026 (v9c)</p>
        </div>
        <div class="bp-hero-right">
            <span class="bp-badge bp-badge-new" style="font-size:14px;padding:6px 16px;">🆕 v9c — 07/03</span>
        </div>
    </div>

    <!-- ══════════════ STATS ══════════════ -->
    <div class="bp-stats">
        <div class="bp-stat-card">
            <div class="bp-stat-number" style="color:var(--bp-primary)">18</div>
            <div class="bp-stat-label">Tổng số bảng</div>
        </div>
        <div class="bp-stat-card">
            <div class="bp-stat-number" style="color:var(--bp-contract)">5</div>
            <div class="bp-stat-label">Bảng Local (mỗi shop)</div>
        </div>
        <div class="bp-stat-card">
            <div class="bp-stat-number" style="color:var(--bp-payment)">2</div>
            <div class="bp-stat-label">Bảng Global cũ</div>
        </div>
        <div class="bp-stat-card">
            <div class="bp-stat-number" style="color:var(--bp-lot)">11</div>
            <div class="bp-stat-label">Bảng Global mới</div>
        </div>
    </div>

    <!-- ══════════════ KIẾN TRÚC 18 BẢNG ══════════════ -->
    <div class="bp-card">
        <h3><i class='bx bx-data'></i> Kiến trúc 18 bảng</h3>

        <div class="bp-grid bp-grid-3">
            <!-- Phần A -->
            <div>
                <h4 style="color:var(--bp-contract)">Phần A — 5 Bảng Local</h4>
                <p class="bp-text-muted">Mỗi shop 1 bộ (wp_{blog_id}_*)</p>
                <table class="bp-table">
                    <tr><td><strong>A1</strong></td><td>local_product_name</td><td>Sản phẩm</td></tr>
                    <tr><td><strong>A2</strong></td><td>local_ledger_person</td><td>NCC / Khách</td></tr>
                    <tr><td><strong>A3</strong></td><td>local_ledger</td><td>Phiếu</td></tr>
                    <tr><td><strong>A4</strong></td><td>local_ledger_item</td><td>Dòng phiếu</td></tr>
                    <tr><td><strong>A5</strong></td><td>transfer_ledger</td><td>Luân chuyển</td></tr>
                </table>
            </div>

            <!-- Phần B -->
            <div>
                <h4 style="color:var(--bp-payment)">Phần B — 2 Bảng Global cũ</h4>
                <p class="bp-text-muted">1 bảng duy nhất toàn hệ thống</p>
                <table class="bp-table">
                    <tr><td><strong>B1</strong></td><td>global_product_cat</td><td>Danh mục SP</td></tr>
                    <tr><td><strong>B2</strong></td><td>global_product_lots</td><td>Lot SP vật lý</td></tr>
                </table>
                <div class="bp-highlight bp-highlight-info" style="margin-top:12px">
                    ⚠️ <strong>"lot" B2</strong> = 1 SP vật lý (lon sữa)<br>
                    ⚠️ <strong>"lot" C2</strong> = 1 lô mua NCC (N SP × SL lớn)<br>
                    Hai khái niệm <strong>hoàn toàn khác nhau</strong>!
                </div>
            </div>

            <!-- Phần C -->
            <div>
                <h4 style="color:var(--bp-lot)">Phần C — 11 Bảng Global mới</h4>
                <p class="bp-text-muted">Toàn hệ thống, quản lý mua bán</p>
                <table class="bp-table">
                    <tr><td><strong>C1</strong></td><td>supplier_contract</td><td>Hợp đồng NCC</td></tr>
                    <tr class="col-new"><td><strong>C2</strong></td><td>purchase_lot 🆕</td><td>Lô mua NCC</td></tr>
                    <tr class="col-new"><td><strong>C2b</strong></td><td>purchase_lot_item 🆕</td><td>Dòng SP trong lô</td></tr>
                    <tr class="col-new"><td><strong>C2c</strong></td><td>lot_item_shop_config 🆕</td><td>MIN/MAX tồn kho shop</td></tr>
                    <tr><td><strong>C3</strong></td><td>purchase_policy</td><td>CS mua</td></tr>
                    <tr><td><strong>C4</strong></td><td>purchase_policy_item</td><td>Dòng CS mua</td></tr>
                    <tr><td><strong>C5</strong></td><td>batch ⭐</td><td>Lô hàng nhập</td></tr>
                    <tr><td><strong>C6</strong></td><td>batch_movement</td><td>Di chuyển batch</td></tr>
                    <tr><td><strong>C7</strong></td><td>supplier_payment</td><td>Công nợ NCC</td></tr>
                    <tr><td><strong>C8</strong></td><td>selling_policy</td><td>CS bán</td></tr>
                    <tr class="col-new"><td><strong>C9</strong></td><td>reorder_suggestion 🆕</td><td>Đề xuất mua/chuyển kho</td></tr>
                </table>
            </div>
        </div>
    </div>

    <!-- ══════════════ 4 NHÁNH QUAN HỆ ══════════════ -->
    <div class="bp-card">
        <h3><i class='bx bx-git-branch'></i> 4 Nhánh quan hệ tổng thể</h3>

        <div class="bp-grid bp-grid-2">
            <div class="bp-branch">
                <div class="bp-branch-title">Nhánh 1: MUA CÓ HỢP ĐỒNG + LÔ</div>
                <div class="bp-flow">
                    <div class="bp-flow-box" style="border-color:var(--bp-contract)">NCC<small>A2</small></div>
                    <span class="bp-flow-arrow">→</span>
                    <div class="bp-flow-box" style="border-color:var(--bp-contract)">Hợp đồng<small>C1</small></div>
                    <span class="bp-flow-arrow">→</span>
                    <div class="bp-flow-box" style="border-color:var(--bp-lot)">Lô mua 🆕<small>C2</small></div>
                    <span class="bp-flow-arrow">→</span>
                    <div class="bp-flow-box" style="border-color:var(--bp-lot)">N dòng SP 🆕<small>C2b</small></div>
                    <span class="bp-flow-arrow">→</span>
                    <div class="bp-flow-box" style="border-color:var(--bp-policy)">Chính sách<small>C3</small></div>
                    <span class="bp-flow-arrow">→</span>
                    <div class="bp-flow-box" style="border-color:var(--bp-primary)">Phiếu mua<small>A3</small></div>
                    <span class="bp-flow-arrow">→</span>
                    <div class="bp-flow-box" style="border-color:var(--bp-batch)">Batch ⭐<small>C5</small></div>
                </div>
            </div>

            <div class="bp-branch">
                <div class="bp-branch-title">Nhánh 2: MUA LẺ / GẤP</div>
                <div class="bp-flow">
                    <div class="bp-flow-box" style="border-color:var(--bp-primary)">Phiếu mua<small>lot = NULL</small></div>
                    <span class="bp-flow-arrow">→</span>
                    <div class="bp-flow-box" style="border-color:var(--bp-batch)">Batch ⭐<small>C5</small></div>
                </div>
                <p class="bp-text-muted" style="margin-top:8px">Không cần HĐ, lô, CS — nhập tay giá, SL trên phiếu.</p>
            </div>

            <div class="bp-branch">
                <div class="bp-branch-title">Nhánh 3: TỪ BATCH TỎA RA</div>
                <div class="bp-flow">
                    <div class="bp-flow-box" style="border-color:var(--bp-batch)">Batch ⭐<small>C5</small></div>
                    <span class="bp-flow-arrow">→</span>
                    <div style="display:flex;flex-direction:column;gap:6px;">
                        <span class="bp-tag">Sub-batch (chia nhỏ)</span>
                        <span class="bp-tag">Di chuyển (C6)</span>
                        <span class="bp-tag">Lot vật lý (B2)</span>
                        <span class="bp-tag">Công nợ (C7)</span>
                        <span class="bp-tag">CS bán (C8)</span>
                    </div>
                </div>
            </div>

            <div class="bp-branch">
                <div class="bp-branch-title">Nhánh 4: THỐNG KÊ THEO CẤP</div>
                <div style="display:flex;flex-direction:column;gap:4px;font-size:14px;">
                    <span>📊 Sub-batch → Batch gốc → Dòng SP lô → Lô mua → Hợp đồng → NCC</span>
                    <span class="bp-text-muted">Query SUM() theo từng cấp — từ chi tiết đến tổng hợp</span>
                </div>
            </div>
        </div>
    </div>

    <!-- ══════════════ THAY ĐỔI 24/02 ══════════════ -->
    <div class="bp-card">
        <h3><i class='bx bx-revision'></i> Lịch sử thay đổi (24/02 → 07/03/2026)</h3>

        <div class="bp-grid bp-grid-2">
            <div>
                <h4>🆕 Bảng mới (4 bảng)</h4>
                <div class="bp-highlight bp-highlight-new">
                    <strong>C2. purchase_lot</strong> — Lô mua NCC<br>
                    Cam kết mua <strong>N sản phẩm × SL lớn</strong>, nhập nhiều đợt, công nợ theo từng đợt
                </div>
                <div class="bp-highlight bp-highlight-new" style="margin-top:8px;">
                    <strong>C2b. purchase_lot_item</strong> — Dòng SP trong lô<br>
                    Mỗi SKU 1 dòng: SL cam kết, giá, tiến độ nhập, ngưỡng gợi ý nhập riêng
                </div>
                <div class="bp-highlight bp-highlight-new" style="margin-top:8px;">
                    <strong>C2c. lot_item_shop_config</strong> — Cấu hình MIN/MAX shop 🆕 <small>v9c</small><br>
                    Mỗi shop + SKU 1 dòng: min_qty, max_qty → hệ thống tự quét đề xuất nhập/chuyển kho
                </div>
                <div class="bp-highlight bp-highlight-new" style="margin-top:8px;">
                    <strong>C9. reorder_suggestion</strong> — Đề xuất tự động 🆕 <small>v9c</small><br>
                    Quét C2c → so sánh tồn kho thực → sinh đề xuất: mua thêm hoặc chuyển kho từ shop thừa
                </div>

                <h4>🆕 Cột mới</h4>
                <table class="bp-table">
                    <tr><th>Bảng</th><th>Cột thêm</th><th>Ý nghĩa</th></tr>
                    <tr class="col-new"><td>A3 ledger</td><td><code>lot_id</code></td><td>Phiếu thuộc lô nào</td></tr>
                    <tr class="col-new"><td>C3 policy</td><td><code>lot_id</code></td><td>CS gắn vào lô</td></tr>
                    <tr class="col-new"><td>C2 lot</td><td><code>lot_total_items</code></td><td>Số dòng SP (cache)</td></tr>
                    <tr class="col-new"><td>C5 batch</td><td><code>lot_id</code></td><td>Batch thuộc lô nào</td></tr>
                    <tr class="col-new"><td>C5 batch</td><td><code>parent_batch_id</code></td><td>Batch cha</td></tr>
                    <tr class="col-new"><td>C5 batch</td><td><code>batch_level</code></td><td>0=gốc, 1=sub</td></tr>
                    <tr class="col-new"><td>C5 batch</td><td><code>split_criteria</code></td><td>Tiêu chí chia</td></tr>
                    <tr class="col-new"><td>C5 batch</td><td><code>is_auto_split</code></td><td>Tự chia / thủ công</td></tr>
                    <tr class="col-new"><td>C7 payment</td><td><code>lot_id</code></td><td>Công nợ nhóm theo lô</td></tr>
                </table>
            </div>

            <div>
                <h4>🔄 Thay đổi logic</h4>
                <ul style="line-height:2;font-size:14px;">
                    <li>Batch hỗ trợ <strong>đệ quy cha-con</strong> (tối đa 2 cấp)</li>
                    <li>Người mua <strong>can thiệp chia batch</strong> (gợi ý + thủ công)</li>
                    <li>Công nợ tính <strong>theo từng đợt nhập</strong>, nhóm được theo lô</li>
                    <li><strong>1 lô = N sản phẩm</strong> (C2b lot_item theo từng SKU)</li>
                    <li><strong>Gợi ý nhập tiếp</strong> THEO TỪNG SKU khi batch bán gần hết (C2b)</li>
                    <li><strong>Gợi ý quyền lợi NCC</strong> khi đạt mốc tích lũy (theo SKU/lô)</li>
                    <li>FIFO chỉ trừ <strong>batch LÁ</strong> (leaf, không có con)</li>
                    <li><strong>Cấu hình MIN/MAX tồn kho</strong> per shop per SKU (C2c) <small class="bp-badge bp-badge-new">v9c</small></li>
                    <li><strong>Tự động quét → đề xuất mua/chuyển kho</strong> (C9) — 4 AJAX endpoints <small class="bp-badge bp-badge-new">v9c</small></li>
                    <li><strong>batch_distribution.sold</strong> cập nhật khi duyệt phiếu bán thủ công <small class="bp-badge bp-badge-new">v9b</small></li>
                </ul>

                <h4>✅ Không thay đổi</h4>
                <p class="bp-text-muted">
                    Hợp đồng (C1) · Policy items (C4) · Batch movement (C6) · Selling policy (C8) ·
                    Các bảng local cũ (A1, A2, A4, A5) · Bảng global cũ (B1-B2)
                </p>
            </div>
        </div>
    </div>

    <!-- ══════════════ QUICK NAV ══════════════ -->
    <h3 style="margin-bottom:16px"><i class='bx bx-navigation'></i> Khám phá chi tiết</h3>
    <div class="bp-nav-cards">
        <a href="<?php echo tgs_bp_url('bp-luong-mua-hang'); ?>" class="bp-nav-card">
            <span class="bp-nav-icon">🔄</span>
            <h4>Luồng 12 Bước</h4>
            <p>Từ ký HĐ → nhập hàng → bán hàng → auto-reorder → thống kê. Timeline trực quan.</p>
        </a>
        <a href="<?php echo tgs_bp_url('bp-lo-mua-ncc'); ?>" class="bp-nav-card">
            <span class="bp-nav-icon">📦</span>
            <h4>Lô Mua NCC <span class="bp-badge bp-badge-new">MỚI</span></h4>
            <p>1 lô = N sản phẩm. Cam kết mua SL lớn, nhập nhiều đợt. Reorder theo từng SKU.</p>
        </a>
        <a href="<?php echo tgs_bp_url('bp-batch'); ?>" class="bp-nav-card">
            <span class="bp-nav-icon">🧱</span>
            <h4>Batch & Sub-batch <span class="bp-badge bp-badge-new">MỚI</span></h4>
            <p>Đệ quy cha-con, chia theo HSD/size. Demo chia batch tương tác.</p>
        </a>
        <a href="<?php echo tgs_bp_url('bp-chinh-sach-mua'); ?>" class="bp-nav-card">
            <span class="bp-nav-icon">📋</span>
            <h4>Chính Sách Mua</h4>
            <p>8 loại rule: giá, CK, tặng, combo, TT sớm, tích lũy...</p>
        </a>
        <a href="<?php echo tgs_bp_url('bp-cong-no'); ?>" class="bp-nav-card">
            <span class="bp-nav-icon">🧮</span>
            <h4>Công Nợ & FIFO</h4>
            <p>Thanh toán theo đợt nhập. FIFO trực quan. WAC gia quyền.</p>
        </a>
        <a href="<?php echo tgs_bp_url('bp-chinh-sach-ban'); ?>" class="bp-nav-card">
            <span class="bp-nav-icon">🏷️</span>
            <h4>Chính Sách Bán</h4>
            <p>Auto-apply khi quét SP. KM theo batch, shop, miền.</p>
        </a>
        <a href="<?php echo tgs_bp_url('bp-bang-du-lieu'); ?>" class="bp-nav-card">
            <span class="bp-nav-icon">📖</span>
            <h4>Từ Điển Dữ Liệu <span class="bp-badge bp-badge-info">DEV</span></h4>
            <p>Chi tiết 18 bảng. Kiểu dữ liệu, ràng buộc, cột mới v9c.</p>
        </a>
    </div>

    <!-- ══════════════ AUTO-REORDER HIGHLIGHT (v9c) ══════════════ -->
    <div class="bp-card" style="border-left:4px solid var(--bp-lot);">
        <h3><i class='bx bx-refresh'></i> Tính năng mới v9c: Auto-Reorder (Đề xuất mua/chuyển kho)</h3>
        <div class="bp-grid bp-grid-2">
            <div>
                <p style="font-size:15px;line-height:1.8">
                    <strong>C2c. lot_item_shop_config</strong> — Cấu hình <code>min_qty</code> / <code>max_qty</code> cho <strong>TỪNG shop + TỪNG SKU</strong>.<br><br>
                    <strong>C9. reorder_suggestion</strong> — Hệ thống <strong>tự quét</strong> C2c → so sánh tồn kho thực tế (<code>batch_distribution</code>) → sinh đề xuất:
                </p>
                <ul style="line-height:2;font-size:14px;">
                    <li><strong>suggested_action = 1</strong>: Mua thêm từ NCC (khi không shop nào dư)</li>
                    <li><strong>suggested_action = 2</strong>: Chuyển kho từ shop thừa (khi phát hiện <code>surplus > 0</code>)</li>
                </ul>
                <div class="bp-highlight bp-highlight-info" style="margin-top:12px;">
                    📌 <strong>Khác C2b reorder_threshold:</strong> C2b là ngưỡng <em>nhập tiếp từ NCC</em> theo lô. C2c/C9 là <em>tồn kho shop</em> MIN/MAX — hai cơ chế khác nhau, bổ sung cho nhau.
                </div>
            </div>
            <div>
                <div class="bp-example">
                    <div class="bp-example-title"><i class='bx bx-refresh'></i> Flow Auto-Reorder</div>
                    <div style="font-size:14px;line-height:2;">
                        <strong>Bước 1:</strong> Admin set min=10, max=50 cho SKU001 tại shop #5 (C2c)<br>
                        <strong>Bước 2:</strong> Bấm "Quét đề xuất" → hệ thống tính stock = qty - sold - damaged - transferred_out<br>
                        <strong>Bước 3:</strong> Stock = 3 < min_qty = 10 → deficit = 7<br>
                        <strong>Bước 4:</strong> Tìm shop thừa (stock > max_qty) → shop #8 surplus = 15<br>
                        <strong>Bước 5:</strong> Sinh đề xuất: "Chuyển 7 SKU001 từ shop #8 → shop #5"<br>
                        <strong>Bước 6:</strong> Nếu không shop nào thừa → "Mua thêm 7 SKU001 từ NCC"
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
