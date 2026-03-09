<?php if (!defined('ABSPATH')) exit; ?>

<div class="bp-page">

    <!-- ══════════════ HERO ══════════════ -->
    <div class="bp-hero" style="background:linear-gradient(135deg, #233446 0%, #435971 100%);">
        <div>
            <h2><i class='bx bx-data'></i> Từ Điển Dữ Liệu — 18 Bảng</h2>
            <p>Chi tiết từng cột · Kiểu dữ liệu · Ràng buộc · Cột mới được highlight · Dành cho DEV · Cập nhật v9c</p>
        </div>
        <div class="bp-hero-right">
            <span class="bp-badge bp-badge-info" style="font-size:14px;padding:6px 16px;">📖 DEV Reference</span>
        </div>
    </div>

    <!-- ══════════════ STATS ══════════════ -->
    <div class="bp-stats">
        <div class="bp-stat-card">
            <div class="bp-stat-number" style="color:var(--bp-primary)">18</div>
            <div class="bp-stat-label">Bảng</div>
        </div>
        <div class="bp-stat-card">
            <div class="bp-stat-number" style="color:var(--bp-batch)">330+</div>
            <div class="bp-stat-label">Tổng cột</div>
        </div>
        <div class="bp-stat-card">
            <div class="bp-stat-number" style="color:var(--bp-lot)">9</div>
            <div class="bp-stat-label">Cột mới thêm vào bảng cũ</div>
        </div>
        <div class="bp-stat-card">
            <div class="bp-stat-number" style="color:var(--bp-payment)">11</div>
            <div class="bp-stat-label">Bảng global mới (C1-C9)</div>
        </div>
    </div>

    <!-- ══════════════ QUICK NAV ══════════════ -->
    <div class="bp-card">
        <h3><i class='bx bx-navigation'></i> Nhảy nhanh đến bảng</h3>
        <div class="bp-grid bp-grid-3">
            <div>
                <h4 style="color:var(--bp-contract)">Phần A — 5 Bảng Local</h4>
                <div style="display:flex;flex-direction:column;gap:4px;font-size:14px;">
                    <a href="#tbl-a1" class="bp-dict-link">A1. local_product_name <small>(16 cột)</small></a>
                    <a href="#tbl-a2" class="bp-dict-link">A2. local_ledger_person <small>(12 cột)</small></a>
                    <a href="#tbl-a3" class="bp-dict-link">A3. local_ledger <small>(17 cột · 3 mới)</small></a>
                    <a href="#tbl-a4" class="bp-dict-link">A4. local_ledger_item <small>(22 cột · 4 mới)</small></a>
                    <a href="#tbl-a5" class="bp-dict-link">A5. transfer_ledger <small>(7 cột)</small></a>
                </div>
            </div>
            <div>
                <h4 style="color:var(--bp-payment)">Phần B — 2 Bảng Global cũ</h4>
                <div style="display:flex;flex-direction:column;gap:4px;font-size:14px;">
                    <a href="#tbl-b1" class="bp-dict-link">B1. global_product_cat <small>(9 cột)</small></a>
                    <a href="#tbl-b2" class="bp-dict-link">B2. global_product_lots <small>(14 cột · 1 mới)</small></a>
                </div>
            </div>
            <div>
                <h4 style="color:var(--bp-lot)">Phần C — 11 Bảng Global mới</h4>
                <div style="display:flex;flex-direction:column;gap:4px;font-size:14px;">
                    <a href="#tbl-c1" class="bp-dict-link">C1. supplier_contract <small>(16 cột)</small></a>
                    <a href="#tbl-c2" class="bp-dict-link">C2. purchase_lot <small>(21 cột) 🆕</small></a>
                    <a href="#tbl-c2b" class="bp-dict-link">C2b. purchase_lot_item <small>(17 cột) 🆕</small></a>
                    <a href="#tbl-c2c" class="bp-dict-link">C2c. lot_item_shop_config <small>(14 cột) 🆕 v9c</small></a>
                    <a href="#tbl-c3" class="bp-dict-link">C3. purchase_policy <small>(26 cột)</small></a>
                    <a href="#tbl-c4" class="bp-dict-link">C4. purchase_policy_item <small>(21 cột)</small></a>
                    <a href="#tbl-c5" class="bp-dict-link">C5. batch ⭐ <small>(38 cột)</small></a>
                    <a href="#tbl-c6" class="bp-dict-link">C6. batch_movement <small>(13 cột)</small></a>
                    <a href="#tbl-c7" class="bp-dict-link">C7. supplier_payment <small>(24 cột)</small></a>
                    <a href="#tbl-c8" class="bp-dict-link">C8. selling_policy <small>(22 cột)</small></a>
                    <a href="#tbl-c9" class="bp-dict-link">C9. reorder_suggestion <small>(23 cột) 🆕 v9c</small></a>
                </div>
            </div>
        </div>
    </div>

    <!-- ══════════════ LEGEND ══════════════ -->
    <div class="bp-highlight bp-highlight-info">
        <strong>Chú giải màu dòng:</strong>&nbsp;
        <span style="display:inline-block;background:#e8f5e9;border-left:3px solid var(--bp-lot);padding:2px 10px;margin:0 8px;font-size:13px;">Cột mới 🆕</span>
        = cột được thêm vào bảng cũ (A/B) hoặc cột thêm 24/02 trong bảng mới (C) &nbsp;·&nbsp;
        Dòng trắng = cột đã có sẵn hoặc cột chuẩn của bảng mới.
    </div>


    <!-- ╔════════════════════════════════════════════════════════════════════╗ -->
    <!-- ║  PHẦN A — 5 BẢNG LOCAL                                           ║ -->
    <!-- ╚════════════════════════════════════════════════════════════════════╝ -->
    <h2 style="margin:32px 0 16px;color:var(--bp-contract)"><i class='bx bx-store'></i> Phần A — 5 Bảng Local (mỗi shop 1 bộ)</h2>
    <p class="bp-text-muted" style="margin-bottom:20px">Prefix: <code>wp_{blog_id}_</code> · Ví dụ shop 5 → <code>wp_5_local_product_name</code></p>

    <!-- ────────── A1 ────────── -->
    <div class="bp-card" id="tbl-a1">
        <h3><i class='bx bx-package'></i> A1. local_product_name — Sản phẩm</h3>
        <p class="bp-text-muted">Mỗi shop 1 bảng. SP chia 2 loại: tracking HSD và không tracking. · <strong>16 cột</strong> · <span class="bp-badge bp-badge-new">1 mới</span></p>
        <table class="bp-table">
            <thead><tr><th>Cột</th><th>Kiểu</th><th>Ràng buộc</th><th>Mô tả</th></tr></thead>
            <tbody>
            <tr><td><code>local_product_name_id</code></td><td>BIGINT</td><td>PK AI</td><td>Khóa chính</td></tr>
            <tr><td><code>local_product_name</code></td><td>TEXT</td><td></td><td>Tên sản phẩm</td></tr>
            <tr><td><code>local_product_sku</code></td><td>VARCHAR(255)</td><td></td><td>Mã SKU (chung toàn hệ thống, cầu nối giữa các shop)</td></tr>
            <tr><td><code>local_product_status</code></td><td>VARCHAR(255)</td><td></td><td>1=hoạt động, 0=ngừng</td></tr>
            <tr><td><code>local_product_is_tracking</code></td><td>TINYINT</td><td></td><td>1=theo dõi HSD (có lot B2), 0=không (dùng FIFO)</td></tr>
            <tr><td><code>local_product_quantity_no_tracking</code></td><td>DECIMAL(15,3)</td><td>DEFAULT 0</td><td>SL tồn kho (chỉ SP không tracking)</td></tr>
            <tr><td><code>local_product_price</code></td><td>DECIMAL(15,3)</td><td></td><td>Giá tham khảo trước thuế</td></tr>
            <tr><td><code>local_product_tax</code></td><td>DECIMAL(15,3)</td><td></td><td>% thuế tham khảo</td></tr>
            <tr><td><code>local_product_price_after_tax</code></td><td>DECIMAL(15,3)</td><td></td><td>Giá sau thuế tham khảo</td></tr>
            <tr><td><code>local_product_list_category_id</code></td><td>JSON</td><td></td><td>[1, 3, 5] — thuộc danh mục nào (FK → B1)</td></tr>
            <tr class="col-new"><td><code>weighted_avg_cost</code> 🆕</td><td>DECIMAL(15,3)</td><td></td><td>Giá vốn BQ gia quyền. WAC = SUM(batch_lá.remaining × avg_cost) / SUM(remaining)</td></tr>
            <tr><td><code>user_id</code></td><td>INTEGER</td><td></td><td>Người tạo</td></tr>
            <tr><td><code>is_deleted</code></td><td>TINYINT</td><td></td><td>0=chưa xóa</td></tr>
            <tr><td><code>deleted_at</code></td><td>DATETIME</td><td>NULL</td><td>Thời gian xóa mềm</td></tr>
            <tr><td><code>created_at</code></td><td>DATETIME</td><td></td><td>Tạo lúc</td></tr>
            <tr><td><code>updated_at</code></td><td>DATETIME</td><td></td><td>Cập nhật lúc</td></tr>
            </tbody>
        </table>
    </div>

    <!-- ────────── A2 ────────── -->
    <div class="bp-card" id="tbl-a2">
        <h3><i class='bx bx-group'></i> A2. local_ledger_person — NCC / Khách hàng</h3>
        <p class="bp-text-muted">Mỗi shop 1 bảng. Lưu cả NCC và khách hàng. · <strong>12 cột</strong> · Không có cột mới</p>
        <table class="bp-table">
            <thead><tr><th>Cột</th><th>Kiểu</th><th>Ràng buộc</th><th>Mô tả</th></tr></thead>
            <tbody>
            <tr><td><code>local_ledger_person_id</code></td><td>BIGINT</td><td>PK AI</td><td>Khóa chính</td></tr>
            <tr><td><code>local_ledger_person_code</code></td><td>VARCHAR(255)</td><td></td><td>Mã NCC/KH</td></tr>
            <tr><td><code>local_ledger_person_name</code></td><td>VARCHAR(255)</td><td></td><td>Tên</td></tr>
            <tr><td><code>local_ledger_person_type</code></td><td>TINYINT</td><td></td><td>1=NCC, 2=khách hàng</td></tr>
            <tr><td><code>local_ledger_person_email</code></td><td>VARCHAR(255)</td><td></td><td>Email</td></tr>
            <tr><td><code>local_ledger_person_phone</code></td><td>VARCHAR(255)</td><td></td><td>SĐT</td></tr>
            <tr><td><code>local_ledger_person_status</code></td><td>INTEGER</td><td></td><td>Trạng thái hoạt động</td></tr>
            <tr><td><code>user_id</code></td><td>INTEGER</td><td></td><td>Người tạo</td></tr>
            <tr><td><code>is_deleted</code></td><td>TINYINT</td><td></td><td>0=chưa xóa</td></tr>
            <tr><td><code>deleted_at</code></td><td>DATETIME</td><td>NULL</td><td>Thời gian xóa mềm</td></tr>
            <tr><td><code>created_at</code></td><td>DATETIME</td><td></td><td>Tạo lúc</td></tr>
            <tr><td><code>updated_at</code></td><td>DATETIME</td><td></td><td>Cập nhật lúc</td></tr>
            </tbody>
        </table>
    </div>

    <!-- ────────── A3 ────────── -->
    <div class="bp-card" id="tbl-a3">
        <h3><i class='bx bx-receipt'></i> A3. local_ledger — Phiếu (mua/bán/thu/chi/xuất/nhập…)</h3>
        <p class="bp-text-muted">Mỗi shop 1 bảng. Bảng trung tâm cho mọi giao dịch. · <strong>17 cột</strong> · <span class="bp-badge bp-badge-new">3 mới</span></p>
        <table class="bp-table">
            <thead><tr><th>Cột</th><th>Kiểu</th><th>Ràng buộc</th><th>Mô tả</th></tr></thead>
            <tbody>
            <tr><td><code>local_ledger_id</code></td><td>BIGINT</td><td>PK AI</td><td>Khóa chính</td></tr>
            <tr><td><code>local_ledger_code</code></td><td>VARCHAR(255)</td><td></td><td>Mã phiếu</td></tr>
            <tr><td><code>local_ledger_title</code></td><td>TEXT</td><td></td><td>Tiêu đề phiếu</td></tr>
            <tr><td><code>local_ledger_type</code></td><td>TINYINT</td><td></td><td>Loại phiếu (xem bảng mã bên dưới)</td></tr>
            <tr><td><code>local_ledger_item_id</code></td><td>JSON</td><td></td><td>[1, 2, 3] — list ledger_item_id</td></tr>
            <tr><td><code>local_ledger_person_id</code></td><td>BIGINT</td><td></td><td>NCC hoặc khách hàng (FK → A2)</td></tr>
            <tr><td><code>local_ledger_total_amount</code></td><td>DECIMAL(15,3)</td><td></td><td>Tổng tiền phiếu</td></tr>
            <tr><td><code>local_ledger_parent_id</code></td><td>BIGINT</td><td></td><td>Phiếu cha (VD: phiếu nhập kho parent = phiếu mua)</td></tr>
            <tr><td><code>local_ledger_approver_status</code></td><td>TINYINT</td><td></td><td>1=đã duyệt</td></tr>
            <tr class="col-new"><td><code>purchase_policy_id</code> 🆕</td><td>BIGINT</td><td>NULL</td><td>Chính sách mua nào (FK → C3)</td></tr>
            <tr class="col-new"><td><code>contract_id</code> 🆕</td><td>BIGINT</td><td>NULL</td><td>Hợp đồng NCC nào (FK → C1)</td></tr>
            <tr class="col-new"><td><code>lot_id</code> 🆕<small> 24/02</small></td><td>BIGINT</td><td>NULL</td><td>Thuộc lô mua NCC nào (FK → C2)</td></tr>
            <tr><td><code>user_id</code></td><td>INTEGER</td><td></td><td>Người tạo</td></tr>
            <tr><td><code>is_deleted</code></td><td>TINYINT</td><td></td><td>0=chưa xóa</td></tr>
            <tr><td><code>deleted_at</code></td><td>DATETIME</td><td>NULL</td><td>Thời gian xóa mềm</td></tr>
            <tr><td><code>created_at</code></td><td>DATETIME</td><td></td><td>Tạo lúc</td></tr>
            <tr><td><code>updated_at</code></td><td>DATETIME</td><td></td><td>Cập nhật lúc</td></tr>
            </tbody>
        </table>

        <!-- Bảng mã -->
        <div class="bp-collapsible" style="margin-top:12px;">
            <div class="bp-collapsible-header"><i class='bx bx-list-ul'></i> Bảng mã local_ledger_type</div>
            <div class="bp-collapsible-body">
                <table class="bp-table" style="font-size:13px;">
                    <tr><th>Mã</th><th>Loại phiếu</th></tr>
                    <tr><td>1</td><td>Phiếu nhập hàng (nhập kho)</td></tr>
                    <tr><td>6</td><td>Phiếu hủy hàng</td></tr>
                    <tr><td>7</td><td>Phiếu thu tiền</td></tr>
                    <tr><td>8</td><td>Phiếu chi tiền</td></tr>
                    <tr><td>9</td><td>Phiếu mua hàng (đặt mua từ NCC) ← <strong>sinh batch khi duyệt</strong></td></tr>
                    <tr><td>10</td><td>Phiếu bán hàng</td></tr>
                    <tr><td>11</td><td>Phiếu hoàn hàng</td></tr>
                    <tr><td>12</td><td>Phiếu xuất hàng nội bộ</td></tr>
                    <tr><td>13</td><td>Nhập hàng nội bộ</td></tr>
                    <tr><td>14</td><td>Trả hàng nội bộ</td></tr>
                    <tr><td>15</td><td>Nhận trả hàng nội bộ</td></tr>
                </table>
            </div>
        </div>
    </div>

    <!-- ────────── A4 ────────── -->
    <div class="bp-card" id="tbl-a4">
        <h3><i class='bx bx-list-check'></i> A4. local_ledger_item — Dòng trong phiếu</h3>
        <p class="bp-text-muted">Mỗi shop 1 bảng. Mỗi dòng = 1 SP trong phiếu. · <strong>22 cột</strong> · <span class="bp-badge bp-badge-new">4 mới</span></p>
        <table class="bp-table">
            <thead><tr><th>Cột</th><th>Kiểu</th><th>Ràng buộc</th><th>Mô tả</th></tr></thead>
            <tbody>
            <tr><td><code>local_ledger_item_id</code></td><td>BIGINT</td><td>PK AI</td><td>Khóa chính</td></tr>
            <tr><td><code>local_ledger_id</code></td><td>BIGINT</td><td></td><td>Thuộc phiếu nào (FK → A3)</td></tr>
            <tr><td><code>local_product_name_id</code></td><td>BIGINT</td><td></td><td>Sản phẩm nào (FK → A1)</td></tr>
            <tr><td><code>quantity</code></td><td>DECIMAL(15,3)</td><td></td><td>Số lượng</td></tr>
            <tr><td><code>price</code></td><td>DECIMAL(15,3)</td><td></td><td>Giá</td></tr>
            <tr><td><code>list_product_lots</code></td><td>JSON</td><td></td><td>List lot_id (SP tracking HSD, FK → B2)</td></tr>
            <tr><td><code>local_ledger_item_discount</code></td><td>DECIMAL(15,3)</td><td></td><td>% chiết khấu</td></tr>
            <tr><td><code>local_ledger_item_discount_type</code></td><td>VARCHAR(255)</td><td></td><td>Loại CK (%)</td></tr>
            <tr><td><code>local_ledger_item_discount_amount</code></td><td>DECIMAL(15,3)</td><td></td><td>Tổng tiền CK</td></tr>
            <tr><td><code>local_ledger_item_tax_percent</code></td><td>DECIMAL(15,3)</td><td></td><td>% thuế</td></tr>
            <tr><td><code>local_ledger_item_tax_amount</code></td><td>DECIMAL(15,3)</td><td></td><td>Tổng tiền thuế</td></tr>
            <tr><td><code>local_ledger_item_gift_type</code></td><td>TINYINT</td><td></td><td>1=hàng tặng</td></tr>
            <tr><td><code>local_ledger_item_type</code></td><td>VARCHAR(255)</td><td></td><td>1=nhập, 2=xuất, 6=hủy</td></tr>
            <tr class="col-new"><td><code>batch_id</code> 🆕</td><td>BIGINT</td><td>NULL</td><td>Thuộc batch nào (FK → C5, batch lá)</td></tr>
            <tr class="col-new"><td><code>pp_item_id</code> 🆕</td><td>BIGINT</td><td>NULL</td><td>Áp dòng chính sách mua nào (FK → C4)</td></tr>
            <tr class="col-new"><td><code>selling_policy_id</code> 🆕</td><td>BIGINT</td><td>NULL</td><td>Áp chính sách bán nào (FK → C8)</td></tr>
            <tr class="col-new"><td><code>batch_cost_breakdown</code> 🆕</td><td>JSON</td><td>NULL</td><td>FIFO: [{"batch_id":1,"qty":3,"unit_cost":15000}]</td></tr>
            <tr><td><code>user_id</code></td><td>INTEGER</td><td></td><td>Người tạo</td></tr>
            <tr><td><code>is_deleted</code></td><td>TINYINT</td><td></td><td>0=chưa xóa</td></tr>
            <tr><td><code>deleted_at</code></td><td>DATETIME</td><td>NULL</td><td>Thời gian xóa mềm</td></tr>
            <tr><td><code>created_at</code></td><td>DATETIME</td><td></td><td>Tạo lúc</td></tr>
            <tr><td><code>updated_at</code></td><td>DATETIME</td><td></td><td>Cập nhật lúc</td></tr>
            </tbody>
        </table>

        <div class="bp-collapsible" style="margin-top:12px;">
            <div class="bp-collapsible-header"><i class='bx bx-code-curly'></i> Ví dụ batch_cost_breakdown (FIFO)</div>
            <div class="bp-collapsible-body">
                <p class="bp-text-muted" style="margin-bottom:8px;">Khi BÁN SP không tracking, hệ thống FIFO trừ batch lá cũ nhất. VD bán 5 gói:</p>
                <div class="bp-json">[
  { <span class="k">"batch_id"</span>: <span class="n">101</span>, <span class="k">"qty"</span>: <span class="n">3</span>, <span class="k">"unit_cost"</span>: <span class="n">15000</span> },
  { <span class="k">"batch_id"</span>: <span class="n">102</span>, <span class="k">"qty"</span>: <span class="n">2</span>, <span class="k">"unit_cost"</span>: <span class="n">16000</span> }
]</div>
            </div>
        </div>
    </div>

    <!-- ────────── A5 ────────── -->
    <div class="bp-card" id="tbl-a5">
        <h3><i class='bx bx-transfer'></i> A5. transfer_ledger — Luân chuyển nội bộ</h3>
        <p class="bp-text-muted">Mỗi shop 1 bảng. Theo dõi hàng di chuyển giữa các shop. · <strong>7 cột</strong> · Không có cột mới</p>
        <table class="bp-table">
            <thead><tr><th>Cột</th><th>Kiểu</th><th>Ràng buộc</th><th>Mô tả</th></tr></thead>
            <tbody>
            <tr><td><code>transfer_ledger_id</code></td><td>BIGINT</td><td>PK AI</td><td>Khóa chính</td></tr>
            <tr><td><code>source_blog_id</code></td><td>BIGINT</td><td>NOT NULL</td><td>Từ shop nào</td></tr>
            <tr><td><code>source_ledger_id</code></td><td>BIGINT</td><td>NOT NULL</td><td>Phiếu xuất</td></tr>
            <tr><td><code>destination_blog_id</code></td><td>BIGINT</td><td>NOT NULL</td><td>Đến shop nào</td></tr>
            <tr><td><code>destination_ledger_id</code></td><td>BIGINT</td><td></td><td>Phiếu nhập (đầu nhận)</td></tr>
            <tr><td><code>transfer_type</code></td><td>TINYINT</td><td>DEFAULT 1</td><td>1=điều chuyển, 3=trả hàng</td></tr>
            <tr><td><code>created_at</code></td><td>DATETIME</td><td>NOT NULL</td><td>Thời gian tạo</td></tr>
            </tbody>
        </table>
    </div>


    <!-- ╔════════════════════════════════════════════════════════════════════╗ -->
    <!-- ║  PHẦN B — 2 BẢNG GLOBAL CŨ                                       ║ -->
    <!-- ╚════════════════════════════════════════════════════════════════════╝ -->
    <h2 style="margin:32px 0 16px;color:var(--bp-payment)"><i class='bx bx-globe'></i> Phần B — 2 Bảng Global cũ (1 bảng duy nhất toàn hệ thống)</h2>
    <p class="bp-text-muted" style="margin-bottom:20px">Prefix: <code>wp_global_</code> · Dùng chung cho tất cả 650 shop</p>

    <!-- ────────── B1 ────────── -->
    <div class="bp-card" id="tbl-b1">
        <h3><i class='bx bx-category'></i> B1. global_product_cat — Danh mục sản phẩm</h3>
        <p class="bp-text-muted">1 bảng duy nhất. Mã danh mục dùng làm TIỀN TỐ batch_code. · <strong>9 cột</strong> · Không có cột mới</p>
        <table class="bp-table">
            <thead><tr><th>Cột</th><th>Kiểu</th><th>Ràng buộc</th><th>Mô tả</th></tr></thead>
            <tbody>
            <tr><td><code>global_product_cat_id</code></td><td>BIGINT</td><td>PK AI</td><td>Khóa chính</td></tr>
            <tr><td><code>global_product_cat_code</code></td><td>VARCHAR(250)</td><td></td><td>Mã danh mục (VD: SUA-BOT, BIM-TA)</td></tr>
            <tr><td><code>global_product_cat_name</code></td><td>VARCHAR(250)</td><td></td><td>Tên danh mục</td></tr>
            <tr><td><code>global_product_cat_path</code></td><td>VARCHAR(500)</td><td></td><td>Đường dẫn cây (Sữa/Sữa bột/…)</td></tr>
            <tr><td><code>global_product_cat_status</code></td><td>TINYINT</td><td>DEFAULT 1</td><td>Trạng thái</td></tr>
            <tr><td><code>is_deleted</code></td><td>TINYINT</td><td></td><td>0=chưa xóa</td></tr>
            <tr><td><code>deleted_at</code></td><td>DATETIME</td><td>NULL</td><td>Thời gian xóa mềm</td></tr>
            <tr><td><code>created_at</code></td><td>DATETIME</td><td></td><td>Tạo lúc</td></tr>
            <tr><td><code>updated_at</code></td><td>DATETIME</td><td></td><td>Cập nhật lúc</td></tr>
            </tbody>
        </table>
    </div>

    <!-- ────────── B2 ────────── -->
    <div class="bp-card" id="tbl-b2">
        <h3><i class='bx bx-barcode'></i> B2. global_product_lots — Mã định danh (lot) từng SP vật lý</h3>
        <p class="bp-text-muted">1 bảng duy nhất. CHỈ dùng cho SP CÓ tracking HSD. · <strong>14 cột</strong> · <span class="bp-badge bp-badge-new">1 mới</span></p>
        <div class="bp-highlight bp-highlight-danger" style="margin-bottom:12px">
            ⚠️ <strong>"lot" ở đây</strong> = 1 SP vật lý (1 lon sữa, 1 hộp bỉm). <strong>KHÁC</strong> "lot" ở C2 (lô mua NCC = N SP × SL lớn).
        </div>
        <table class="bp-table">
            <thead><tr><th>Cột</th><th>Kiểu</th><th>Ràng buộc</th><th>Mô tả</th></tr></thead>
            <tbody>
            <tr><td><code>global_product_lot_id</code></td><td>BIGINT</td><td>PK AI</td><td>Khóa chính</td></tr>
            <tr><td><code>global_product_lot_barcode</code></td><td>VARCHAR(255)</td><td></td><td>Mã vạch định danh</td></tr>
            <tr><td><code>global_product_lot_price</code></td><td>DECIMAL(15,3)</td><td></td><td>Giá bán</td></tr>
            <tr><td><code>to_blog_id</code></td><td>BIGINT</td><td></td><td>Đang ở shop nào</td></tr>
            <tr><td><code>local_product_lot_is_active</code></td><td>TINYINT</td><td>DEFAULT 2</td><td>0=đã bán, 1=trong kho, 2=chờ duyệt, 3=hủy</td></tr>
            <tr><td><code>lot_code</code></td><td>VARCHAR(255)</td><td></td><td>Mã lô HSD vật lý</td></tr>
            <tr><td><code>exp_date</code></td><td>DATE</td><td></td><td>Hạn sử dụng</td></tr>
            <tr><td><code>local_product_sku</code></td><td>VARCHAR(255)</td><td></td><td>SKU sản phẩm</td></tr>
            <tr class="col-new"><td><code>batch_id</code> 🆕</td><td>BIGINT</td><td>NULL</td><td>Thuộc batch LÁ nào (FK → C5, leaf batch)</td></tr>
            <tr><td><code>user_id</code></td><td>INTEGER</td><td></td><td>Người tạo</td></tr>
            <tr><td><code>is_deleted</code></td><td>TINYINT</td><td></td><td>0=chưa xóa</td></tr>
            <tr><td><code>deleted_at</code></td><td>DATETIME</td><td>NULL</td><td>Thời gian xóa mềm</td></tr>
            <tr><td><code>created_at</code></td><td>DATETIME</td><td></td><td>Tạo lúc</td></tr>
            <tr><td><code>updated_at</code></td><td>DATETIME</td><td></td><td>Cập nhật lúc</td></tr>
            </tbody>
        </table>
    </div>


    <!-- ╔════════════════════════════════════════════════════════════════════╗ -->
    <!-- ║  PHẦN C — 11 BẢNG GLOBAL MỚI                                     ║ -->
    <!-- ╚════════════════════════════════════════════════════════════════════╝ -->
    <h2 style="margin:32px 0 16px;color:var(--bp-lot)"><i class='bx bx-planet'></i> Phần C — 11 Bảng Global mới (cập nhật v9c — 07/03/2026)</h2>
    <p class="bp-text-muted" style="margin-bottom:20px">Prefix: <code>wp_global_</code> · Toàn bộ bảng mới cho module mua bán hàng. Dòng <span style="background:#e8f5e9;padding:1px 6px;font-size:12px;">xanh 🆕</span> = cột thêm 24/02 hoặc v9c.</p>

    <!-- ────────── C1 ────────── -->
    <div class="bp-card" id="tbl-c1">
        <h3><i class='bx bx-file'></i> C1. supplier_contract — Hợp đồng NCC</h3>
        <p class="bp-text-muted">1 NCC có thể nhiều HĐ. HĐ = khung pháp lý, không bắt buộc (mua lẻ bỏ qua). · <strong>16 cột</strong></p>
        <table class="bp-table">
            <thead><tr><th>Cột</th><th>Kiểu</th><th>Ràng buộc</th><th>Mô tả</th></tr></thead>
            <tbody>
            <tr><td><code>contract_id</code></td><td>BIGINT</td><td>PK AI</td><td>Khóa chính</td></tr>
            <tr><td><code>contract_code</code></td><td>VARCHAR(100)</td><td></td><td>Mã hợp đồng</td></tr>
            <tr><td><code>contract_title</code></td><td>TEXT</td><td></td><td>Tên hợp đồng</td></tr>
            <tr><td><code>ledger_person_id</code></td><td>BIGINT</td><td></td><td>NCC nào (FK → A2 type=1)</td></tr>
            <tr><td><code>ledger_person_blog_id</code></td><td>BIGINT</td><td></td><td>Blog chứa NCC</td></tr>
            <tr><td><code>contract_start_date</code></td><td>DATE</td><td></td><td>Bắt đầu HĐ</td></tr>
            <tr><td><code>contract_end_date</code></td><td>DATE</td><td></td><td>Kết thúc HĐ</td></tr>
            <tr><td><code>contract_terms</code></td><td>JSON</td><td></td><td>Điều khoản khung (phương thức TT, trả chậm, ngân hàng…)</td></tr>
            <tr><td><code>contract_status</code></td><td>TINYINT</td><td></td><td>0=draft, 1=active, 2=expired, 3=cancelled</td></tr>
            <tr><td><code>contract_meta</code></td><td>JSON</td><td></td><td>File đính kèm, ghi chú mở rộng</td></tr>
            <tr><td><code>source_blog_id</code></td><td>BIGINT</td><td></td><td>Tạo từ node nào</td></tr>
            <tr><td><code>user_id</code></td><td>BIGINT</td><td></td><td>Người tạo</td></tr>
            <tr><td><code>is_deleted</code></td><td>TINYINT</td><td></td><td>0=chưa xóa</td></tr>
            <tr><td><code>deleted_at</code></td><td>DATETIME</td><td>NULL</td><td>Thời gian xóa mềm</td></tr>
            <tr><td><code>created_at</code></td><td>DATETIME</td><td></td><td>Tạo lúc</td></tr>
            <tr><td><code>updated_at</code></td><td>DATETIME</td><td></td><td>Cập nhật lúc</td></tr>
            </tbody>
        </table>

        <div class="bp-collapsible" style="margin-top:12px;">
            <div class="bp-collapsible-header"><i class='bx bx-code-curly'></i> Ví dụ contract_terms (JSON)</div>
            <div class="bp-collapsible-body">
                <div class="bp-json">{
  <span class="k">"payment_method"</span>: <span class="s">"bank_transfer"</span>,
  <span class="k">"credit_days"</span>:    <span class="n">30</span>,
  <span class="k">"currency"</span>:       <span class="s">"VND"</span>,
  <span class="k">"bank_account"</span>:   <span class="s">"123456789 - Vietcombank"</span>,
  <span class="k">"notes"</span>:          <span class="s">"Thanh toán cuối tháng"</span>
}</div>
            </div>
        </div>
    </div>

    <!-- ────────── C2 ────────── -->
    <div class="bp-card" id="tbl-c2" style="border-left:4px solid var(--bp-lot)">
        <h3><i class='bx bx-package'></i> C2. purchase_lot — 🆕 Lô Mua NCC <span class="bp-badge bp-badge-new">MỚI 24/02</span></h3>
        <p class="bp-text-muted">1 lô = N sản phẩm (chi tiết ở C2b). Cam kết mua SL lớn, nhập nhiều đợt. · <strong>21 cột</strong></p>
        <table class="bp-table">
            <thead><tr><th>Cột</th><th>Kiểu</th><th>Ràng buộc</th><th>Mô tả</th></tr></thead>
            <tbody>
            <tr><td><code>lot_id</code></td><td>BIGINT</td><td>PK AI</td><td>Khóa chính</td></tr>
            <tr><td><code>lot_code</code></td><td>VARCHAR(100)</td><td></td><td>Mã lô: VNM-LOT-2026-001</td></tr>
            <tr><td><code>lot_title</code></td><td>TEXT</td><td></td><td>"Lô mua Vinamilk Q1/2026"</td></tr>
            <tr><td><code>lot_description</code></td><td>TEXT</td><td></td><td>Mô tả chi tiết</td></tr>
            <tr><td><code>contract_id</code></td><td>BIGINT</td><td>NULL</td><td>Thuộc hợp đồng nào (FK → C1, nullable)</td></tr>
            <tr><td><code>ledger_person_id</code></td><td>BIGINT</td><td></td><td>NCC (FK → A2)</td></tr>
            <tr><td><code>ledger_person_blog_id</code></td><td>BIGINT</td><td></td><td>Blog chứa NCC</td></tr>
            <tr><td colspan="4" style="background:#f5f5f9;font-weight:600;font-size:12px;">── Tổng hợp (tính từ C2b) ──</td></tr>
            <tr><td><code>lot_total_committed_value</code></td><td>DECIMAL(15,3)</td><td></td><td>Tổng giá trị cam kết = SUM(C2b.committed_value)</td></tr>
            <tr><td><code>lot_total_items</code></td><td>INT</td><td>DEFAULT 0</td><td>Số dòng SP trong lô = COUNT(C2b) — cache nhanh</td></tr>
            <tr><td colspan="4" style="background:#f5f5f9;font-weight:600;font-size:12px;">── Thời gian ──</td></tr>
            <tr><td><code>lot_start_date</code></td><td>DATE</td><td></td><td>Bắt đầu cam kết</td></tr>
            <tr><td><code>lot_end_date</code></td><td>DATE</td><td></td><td>Kết thúc cam kết</td></tr>
            <tr><td colspan="4" style="background:#f5f5f9;font-weight:600;font-size:12px;">── Gợi ý tái nhập ──</td></tr>
            <tr><td><code>auto_reorder_enabled</code></td><td>TINYINT</td><td>DEFAULT 0</td><td>1=tự gợi ý nhập tiếp khi batch bán gần hết</td></tr>
            <tr><td><code>reorder_notify_roles</code></td><td>JSON</td><td></td><td>Ai nhận thông báo: ["admin","purchaser"]</td></tr>
            <tr><td colspan="4" style="background:#f5f5f9;font-weight:600;font-size:12px;">── Trạng thái ──</td></tr>
            <tr><td><code>lot_status</code></td><td>TINYINT</td><td></td><td>0=draft, 1=active, 2=completed, 3=cancelled</td></tr>
            <tr><td><code>lot_meta</code></td><td>JSON</td><td></td><td>Mở rộng</td></tr>
            <tr><td><code>source_blog_id</code></td><td>BIGINT</td><td></td><td>Tạo từ node nào</td></tr>
            <tr><td><code>user_id</code></td><td>BIGINT</td><td></td><td>Người tạo</td></tr>
            <tr><td><code>is_deleted</code></td><td>TINYINT</td><td></td><td>0=chưa xóa</td></tr>
            <tr><td><code>deleted_at</code></td><td>DATETIME</td><td>NULL</td><td>Thời gian xóa mềm</td></tr>
            <tr><td><code>created_at</code></td><td>DATETIME</td><td></td><td>Tạo lúc</td></tr>
            <tr><td><code>updated_at</code></td><td>DATETIME</td><td></td><td>Cập nhật lúc</td></tr>
            </tbody>
        </table>

        <div class="bp-highlight bp-highlight-info" style="margin-top:12px;">
            💡 <strong>Vì sao bỏ committed_qty, imported_qty, remaining_qty, reorder_threshold?</strong><br>
            → Chuyển xuống C2b (per-SKU). 1 lô chứa nhiều SP, mỗi SP có SL cam kết / đã nhập / ngưỡng riêng.
        </div>
    </div>

    <!-- ────────── C2b ────────── -->
    <div class="bp-card" id="tbl-c2b" style="border-left:4px solid var(--bp-lot)">
        <h3><i class='bx bx-list-plus'></i> C2b. purchase_lot_item — 🆕 Dòng SP trong Lô <span class="bp-badge bp-badge-new">MỚI</span></h3>
        <p class="bp-text-muted">1 lot có N dòng lot_item (N sản phẩm). Mỗi dòng = 1 SKU với SL cam kết riêng. · <strong>17 cột</strong></p>
        <table class="bp-table">
            <thead><tr><th>Cột</th><th>Kiểu</th><th>Ràng buộc</th><th>Mô tả</th></tr></thead>
            <tbody>
            <tr><td><code>lot_item_id</code></td><td>BIGINT</td><td>PK AI</td><td>Khóa chính</td></tr>
            <tr><td><code>lot_id</code></td><td>BIGINT</td><td>FK</td><td>Thuộc lô nào (FK → C2)</td></tr>
            <tr><td><code>product_sku</code></td><td>VARCHAR(255)</td><td></td><td>SKU sản phẩm (cầu nối toàn hệ thống)</td></tr>
            <tr><td><code>product_name_cache</code></td><td>VARCHAR(500)</td><td></td><td>Tên SP cache (hiển thị nhanh, ko cần JOIN)</td></tr>
            <tr><td colspan="4" style="background:#f5f5f9;font-weight:600;font-size:12px;">── Cam kết per-SKU ──</td></tr>
            <tr><td><code>committed_qty</code></td><td>DECIMAL(15,3)</td><td></td><td>SL cam kết mua SKU này (VD: 5,000)</td></tr>
            <tr><td><code>committed_unit_price</code></td><td>DECIMAL(15,3)</td><td></td><td>Đơn giá cam kết</td></tr>
            <tr><td><code>committed_value</code></td><td>DECIMAL(15,3)</td><td></td><td>= committed_qty × committed_unit_price</td></tr>
            <tr><td colspan="4" style="background:#f5f5f9;font-weight:600;font-size:12px;">── Tiến độ nhập ──</td></tr>
            <tr><td><code>imported_qty</code></td><td>DECIMAL(15,3)</td><td>DEFAULT 0</td><td>Đã nhập (SUM các đợt cho SKU này)</td></tr>
            <tr><td><code>remaining_qty</code></td><td>DECIMAL(15,3)</td><td></td><td>Chưa nhập = committed_qty − imported_qty</td></tr>
            <tr><td colspan="4" style="background:#f5f5f9;font-weight:600;font-size:12px;">── Gợi ý tái nhập per-SKU ──</td></tr>
            <tr><td><code>reorder_threshold_qty</code></td><td>INT</td><td>DEFAULT 0</td><td>Ngưỡng số lượng → tồn kho ≤ số này thì nhắc nhập tiếp</td></tr>
            <tr><td colspan="4" style="background:#f5f5f9;font-weight:600;font-size:12px;">── Ghi chú ──</td></tr>
            <tr><td><code>lot_item_note</code></td><td>TEXT</td><td></td><td>Ghi chú cho dòng SP</td></tr>
            <tr><td><code>lot_item_meta</code></td><td>JSON</td><td></td><td>Mở rộng (HSD yêu cầu, đóng gói…)</td></tr>
            <tr><td><code>user_id</code></td><td>BIGINT</td><td></td><td>Người tạo</td></tr>
            <tr><td><code>is_deleted</code></td><td>TINYINT</td><td></td><td>0=chưa xóa</td></tr>
            <tr><td><code>deleted_at</code></td><td>DATETIME</td><td>NULL</td><td>Thời gian xóa mềm</td></tr>
            <tr><td><code>created_at</code></td><td>DATETIME</td><td></td><td>Tạo lúc</td></tr>
            <tr><td><code>updated_at</code></td><td>DATETIME</td><td></td><td>Cập nhật lúc</td></tr>
            </tbody>
        </table>

        <div class="bp-highlight" style="margin-top:12px;">
            📌 <strong>UNIQUE INDEX:</strong> <code>(lot_id, product_sku)</code> — 1 lô không được có 2 dòng cùng SKU.
        </div>
    </div>

    <!-- ────────── C2c ────────── -->
    <div class="bp-card" id="tbl-c2c" style="border-left:4px solid var(--bp-lot)">
        <h3><i class='bx bx-store'></i> C2c. lot_item_shop_config — 🆕 Cấu hình MIN/MAX tồn kho shop <span class="bp-badge bp-badge-new">MỚI v9c</span></h3>
        <p class="bp-text-muted">Mỗi shop + SKU 1 dòng: tồn tối thiểu, tối đa. Hệ thống quét → sinh đề xuất C9. · <strong>14 cột</strong></p>
        <div class="bp-highlight bp-highlight-info" style="margin-bottom:12px;">
            💡 <strong>Demo lúc trình bày:</strong> Bảng này trả lời câu hỏi <em>"Shop #5 nên giữ tối thiểu bao nhiêu Dielac?"</em>.<br>
            Admin set min_qty=10 → hệ thống tự nhắc khi tồn kho < 10. Phục vụ 650 shop × hàng ngàn SKU.
        </div>
        <table class="bp-table">
            <thead><tr><th>Cột</th><th>Kiểu</th><th>Ràng buộc</th><th>Mô tả</th></tr></thead>
            <tbody>
            <tr><td><code>config_id</code></td><td>BIGINT</td><td>PK AI</td><td>Khóa chính</td></tr>
            <tr><td><code>lot_item_id</code></td><td>BIGINT</td><td>FK → C2b</td><td>Dòng SP nào trong lô (liên kết C2b)</td></tr>
            <tr><td><code>lot_id</code></td><td>BIGINT</td><td>FK → C2</td><td>Denormalize cho query nhanh (tránh JOIN C2b)</td></tr>
            <tr><td><code>product_sku</code></td><td>VARCHAR(255)</td><td></td><td>Denormalize SKU (tránh JOIN C2b)</td></tr>
            <tr><td><code>blog_id</code></td><td>BIGINT</td><td>NOT NULL</td><td>Shop nào (multisite blog_id)</td></tr>
            <tr><td><code>blog_name_cache</code></td><td>VARCHAR(255)</td><td></td><td>Tên shop (cache, tránh switch_to_blog)</td></tr>
            <tr><td colspan="4" style="background:#f5f5f9;font-weight:600;font-size:12px;">── Ngưỡng tồn kho ──</td></tr>
            <tr><td><code>min_qty</code></td><td>DECIMAL(15,3)</td><td>DEFAULT 0</td><td>Tồn tối thiểu. 0 = không giám sát. <strong>Demo:</strong> min=10 → stock=3 → deficit=7</td></tr>
            <tr><td><code>max_qty</code></td><td>DECIMAL(15,3)</td><td>DEFAULT 0</td><td>Tồn tối đa. 0 = không giới hạn. <strong>Demo:</strong> max=50 → stock=65 → surplus=15</td></tr>
            <tr><td><code>is_active</code></td><td>TINYINT</td><td>DEFAULT 1</td><td>1=đang giám sát, 0=tắt (tạm dừng không quét)</td></tr>
            <tr><td colspan="4" style="background:#f5f5f9;font-weight:600;font-size:12px;">── Mở rộng ──</td></tr>
            <tr><td><code>config_note</code></td><td>TEXT</td><td></td><td>Ghi chú</td></tr>
            <tr><td><code>config_meta</code></td><td>JSON</td><td></td><td>Mở rộng (ngày review tiếp, lý do set ngưỡng…)</td></tr>
            <tr><td><code>user_id</code></td><td>BIGINT</td><td></td><td>Người tạo/sửa</td></tr>
            <tr><td><code>created_at</code></td><td>DATETIME</td><td></td><td>Tạo lúc</td></tr>
            <tr><td><code>updated_at</code></td><td>DATETIME</td><td></td><td>Cập nhật lúc</td></tr>
            </tbody>
        </table>

        <div class="bp-highlight bp-highlight-new" style="margin-top:12px;">
            📌 <strong>UNIQUE INDEX:</strong> <code>(lot_item_id, blog_id)</code> — 1 shop chỉ có 1 config cho 1 lot_item.<br>
            📌 <strong>INDEX:</strong> <code>(product_sku, blog_id)</code> — query nhanh khi quét auto-reorder.<br>
            📌 <strong>Khác C2b reorder_threshold:</strong> C2b là ngưỡng <em>số lượng tồn kho</em> để nhắc nhập tiếp từ NCC (tổng lô). C2c là <em>tồn kho tại shop</em> (MIN/MAX cụ thể).
        </div>
    </div>

    <!-- ────────── C3 ────────── -->
    <div class="bp-card" id="tbl-c3">
        <h3><i class='bx bx-book-content'></i> C3. purchase_policy — Chính sách mua hàng</h3>
        <p class="bp-text-muted">Rule giá, CK, tặng, combo. CS = GỢI Ý, phiếu = SỰ THẬT. · <strong>26 cột</strong> · <span class="bp-badge bp-badge-new">lot_id 24/02</span></p>
        <table class="bp-table">
            <thead><tr><th>Cột</th><th>Kiểu</th><th>Ràng buộc</th><th>Mô tả</th></tr></thead>
            <tbody>
            <tr><td><code>purchase_policy_id</code></td><td>BIGINT</td><td>PK AI</td><td>Khóa chính</td></tr>
            <tr><td><code>purchase_policy_code</code></td><td>VARCHAR(100)</td><td></td><td>Mã CS</td></tr>
            <tr><td><code>purchase_policy_title</code></td><td>TEXT</td><td></td><td>"Mua sữa Vinamilk T2/2026"</td></tr>
            <tr><td><code>purchase_policy_description</code></td><td>TEXT</td><td></td><td>Mô tả</td></tr>
            <tr><td><code>contract_id</code></td><td>BIGINT</td><td>NULL</td><td>Thuộc HĐ nào (FK → C1, nullable)</td></tr>
            <tr class="col-new"><td><code>lot_id</code> 🆕<small> 24/02</small></td><td>BIGINT</td><td>NULL</td><td>Thuộc lô mua nào (FK → C2, nullable). FK 1 chiều: CS → lot</td></tr>
            <tr><td><code>ledger_person_id</code></td><td>BIGINT</td><td></td><td>NCC (query nhanh)</td></tr>
            <tr><td><code>ledger_person_blog_id</code></td><td>BIGINT</td><td></td><td>Blog chứa NCC</td></tr>
            <tr><td><code>purchase_policy_type</code></td><td>TINYINT</td><td></td><td>1=mua thường, 2=mua KM, 3=mua combo</td></tr>
            <tr><td><code>purchase_policy_start_date</code></td><td>BIGINT</td><td></td><td>Timestamp bắt đầu</td></tr>
            <tr><td><code>purchase_policy_end_date</code></td><td>BIGINT</td><td></td><td>Timestamp kết thúc</td></tr>
            <tr><td><code>apply_to_blog_ids</code></td><td>JSON</td><td></td><td>Áp cho shop nào [1,5,10]</td></tr>
            <tr><td><code>apply_to_org_level</code></td><td>JSON</td><td></td><td>Áp theo cấp tổ chức {"level":"branch","id":3}</td></tr>
            <tr><td><code>policy_is_template</code></td><td>TINYINT</td><td>DEFAULT 0</td><td>1=template tái sử dụng</td></tr>
            <tr><td><code>policy_parent_id</code></td><td>BIGINT</td><td></td><td>Clone từ CS nào</td></tr>
            <tr><td><code>policy_total_budget</code></td><td>DECIMAL(15,3)</td><td></td><td>Ngân sách dự kiến</td></tr>
            <tr><td><code>policy_accumulate_target</code></td><td>DECIMAL(15,3)</td><td></td><td>Mục tiêu tích lũy mua cả năm</td></tr>
            <tr><td><code>policy_accumulate_current</code></td><td>DECIMAL(15,3)</td><td>DEFAULT 0</td><td>Đã mua tích lũy</td></tr>
            <tr><td><code>purchase_policy_status</code></td><td>TINYINT</td><td></td><td>0=draft, 1=active, 2=expired, 3=cancelled</td></tr>
            <tr><td><code>purchase_policy_meta</code></td><td>JSON</td><td></td><td>Mở rộng</td></tr>
            <tr><td><code>source_blog_id</code></td><td>BIGINT</td><td></td><td>Tạo từ node nào</td></tr>
            <tr><td><code>user_id</code></td><td>BIGINT</td><td></td><td>Người tạo</td></tr>
            <tr><td><code>is_deleted</code></td><td>TINYINT</td><td></td><td>0=chưa xóa</td></tr>
            <tr><td><code>deleted_at</code></td><td>DATETIME</td><td>NULL</td><td>Thời gian xóa mềm</td></tr>
            <tr><td><code>created_at</code></td><td>DATETIME</td><td></td><td>Tạo lúc</td></tr>
            <tr><td><code>updated_at</code></td><td>DATETIME</td><td></td><td>Cập nhật lúc</td></tr>
            </tbody>
        </table>
    </div>

    <!-- ────────── C4 ────────── -->
    <div class="bp-card" id="tbl-c4">
        <h3><i class='bx bx-list-ol'></i> C4. purchase_policy_item — Dòng chi tiết CS mua</h3>
        <p class="bp-text-muted">Mỗi dòng = 1 quy tắc cụ thể. 8 loại pp_item_type. · <strong>21 cột</strong></p>
        <table class="bp-table">
            <thead><tr><th>Cột</th><th>Kiểu</th><th>Ràng buộc</th><th>Mô tả</th></tr></thead>
            <tbody>
            <tr><td><code>pp_item_id</code></td><td>BIGINT</td><td>PK AI</td><td>Khóa chính</td></tr>
            <tr><td><code>purchase_policy_id</code></td><td>BIGINT</td><td>FK</td><td>Thuộc CS nào (FK → C3)</td></tr>
            <tr><td><code>pp_item_code</code></td><td>VARCHAR(100)</td><td></td><td>Mã dòng</td></tr>
            <tr><td><code>pp_item_title</code></td><td>TEXT</td><td></td><td>Tên dễ hiểu</td></tr>
            <tr><td><code>pp_item_type</code></td><td>TINYINT</td><td></td><td>Loại rule (xem bảng mã bên dưới)</td></tr>
            <tr><td><code>product_skus</code></td><td>JSON</td><td></td><td>SP chính: [{"sku":"SKU001","qty_min":1,"price":180000}]</td></tr>
            <tr><td><code>gift_skus</code></td><td>JSON</td><td></td><td>SP tặng: [{"sku":"SKU003","qty":10}]</td></tr>
            <tr><td><code>discount_rules</code></td><td>JSON</td><td></td><td>CK bậc thang: [{"from":100,"to":499,"percent":3}]</td></tr>
            <tr><td><code>tax_percent</code></td><td>DECIMAL(15,3)</td><td></td><td>% thuế</td></tr>
            <tr><td><code>payment_terms</code></td><td>JSON</td><td></td><td>Điều kiện TT sớm: {"credit_days":30,"early_payment":[…]}</td></tr>
            <tr><td><code>pp_item_conditions</code></td><td>JSON</td><td></td><td>Điều kiện khác (mở rộng)</td></tr>
            <tr><td><code>pp_item_priority</code></td><td>INT</td><td></td><td>Thứ tự ưu tiên</td></tr>
            <tr><td><code>pp_item_status</code></td><td>TINYINT</td><td></td><td>0=draft, 1=active</td></tr>
            <tr><td><code>pp_item_start_time</code></td><td>BIGINT</td><td></td><td>Timestamp bắt đầu (thường NULL, kế thừa CS cha)</td></tr>
            <tr><td><code>pp_item_end_time</code></td><td>BIGINT</td><td></td><td>Timestamp kết thúc (thường NULL)</td></tr>
            <tr><td><code>pp_item_meta</code></td><td>JSON</td><td></td><td>Mở rộng</td></tr>
            <tr><td><code>user_id</code></td><td>BIGINT</td><td></td><td>Người tạo</td></tr>
            <tr><td><code>is_deleted</code></td><td>TINYINT</td><td></td><td>0=chưa xóa</td></tr>
            <tr><td><code>deleted_at</code></td><td>DATETIME</td><td>NULL</td><td>Thời gian xóa mềm</td></tr>
            <tr><td><code>created_at</code></td><td>DATETIME</td><td></td><td>Tạo lúc</td></tr>
            <tr><td><code>updated_at</code></td><td>DATETIME</td><td></td><td>Cập nhật lúc</td></tr>
            </tbody>
        </table>

        <div class="bp-collapsible open" style="margin-top:12px;">
            <div class="bp-collapsible-header"><i class='bx bx-list-ul'></i> Bảng mã pp_item_type (8 loại)</div>
            <div class="bp-collapsible-body">
                <table class="bp-table" style="font-size:13px;">
                    <tr><th>Type</th><th>Tên</th><th>Hiện trên phiếu?</th><th>Ghi chú</th></tr>
                    <tr><td>1</td><td>Giá mua cố định</td><td>✅ Có · cho sửa</td><td>Giá mua từng SKU</td></tr>
                    <tr><td>2</td><td>Chiết khấu %</td><td>✅ Có · cho sửa %</td><td>CK bậc thang theo SL</td></tr>
                    <tr><td>3</td><td>CK tiền cố định</td><td>✅ Có · cho sửa</td><td>Trừ tiền trực tiếp</td></tr>
                    <tr><td>4</td><td>Hàng tặng</td><td>✅ Thêm dòng tặng</td><td>Mua X tặng Y</td></tr>
                    <tr><td>5</td><td>Combo</td><td>✅ Thêm dòng tặng</td><td>Mua A+B tặng C</td></tr>
                    <tr><td>6</td><td>Thanh toán sớm</td><td>❌ Không</td><td>Áp lúc TT công nợ</td></tr>
                    <tr><td>7</td><td>Tích lũy cuối kỳ</td><td>❌ Không</td><td>Volume rebate — quyết toán cuối kỳ</td></tr>
                    <tr><td>8</td><td>Đặc biệt</td><td>❌ Không</td><td>Toàn bộ logic JSON</td></tr>
                </table>
            </div>
        </div>
    </div>

    <!-- ────────── C5 ────────── -->
    <div class="bp-card" id="tbl-c5" style="border-left:4px solid var(--bp-batch)">
        <h3><i class='bx bx-layer'></i> C5. batch — ⭐ Lô Hàng Nhập (BẢNG TRUNG TÂM)</h3>
        <p class="bp-text-muted">Sinh khi duyệt phiếu mua. Đệ quy cha-con tối đa 2 cấp. · <strong>38 cột</strong> · <span class="bp-badge bp-badge-new">5 cột 24/02</span></p>
        <table class="bp-table">
            <thead><tr><th>Cột</th><th>Kiểu</th><th>Ràng buộc</th><th>Mô tả</th></tr></thead>
            <tbody>
            <tr><td><code>batch_id</code></td><td>BIGINT</td><td>PK AI</td><td>Khóa chính</td></tr>
            <tr><td><code>batch_code</code></td><td>VARCHAR(100)</td><td></td><td>Tự sinh: SUA-BOT-SKU001-20260213-001</td></tr>
            <tr><td><code>product_sku</code></td><td>VARCHAR(255)</td><td></td><td>SKU sản phẩm (1 batch = 1 SKU)</td></tr>
            <tr><td><code>global_product_cat_id</code></td><td>BIGINT</td><td></td><td>Danh mục SP (FK → B1, dùng GROUP BY)</td></tr>
            <tr><td colspan="4" style="background:#f5f5f9;font-weight:600;font-size:12px;">── 🆕 Lô mua + Đệ quy (24/02) ──</td></tr>
            <tr class="col-new"><td><code>lot_id</code> 🆕<small> 24/02</small></td><td>BIGINT</td><td>NULL</td><td>Thuộc lô mua NCC nào (FK → C2, nullable)</td></tr>
            <tr class="col-new"><td><code>parent_batch_id</code> 🆕<small> 24/02</small></td><td>BIGINT</td><td>NULL</td><td>Batch cha (NULL = batch gốc cấp 0, FK → C5)</td></tr>
            <tr class="col-new"><td><code>batch_level</code> 🆕<small> 24/02</small></td><td>TINYINT</td><td>DEFAULT 0</td><td>0=gốc, 1=sub-batch</td></tr>
            <tr class="col-new"><td><code>split_criteria</code> 🆕<small> 24/02</small></td><td>JSON</td><td></td><td>Tiêu chí chia: {"by":"exp_date","value":"10/2026"}</td></tr>
            <tr class="col-new"><td><code>is_auto_split</code> 🆕<small> 24/02</small></td><td>TINYINT</td><td>DEFAULT 1</td><td>1=hệ thống tự chia, 0=người dùng tự chia</td></tr>
            <tr><td colspan="4" style="background:#f5f5f9;font-weight:600;font-size:12px;">── Nguồn gốc ──</td></tr>
            <tr><td><code>batch_snapshot</code></td><td>JSON</td><td></td><td>Bản chụp tĩnh lúc tạo (KHÔNG BAO GIỜ thay đổi)</td></tr>
            <tr><td><code>purchase_policy_id</code></td><td>BIGINT</td><td></td><td>CS mua nào (FK → C3)</td></tr>
            <tr><td><code>contract_id</code></td><td>BIGINT</td><td></td><td>HĐ nào (FK → C1)</td></tr>
            <tr><td><code>ledger_person_id</code></td><td>BIGINT</td><td></td><td>NCC (FK → A2)</td></tr>
            <tr><td><code>source_ledger_id</code></td><td>BIGINT</td><td></td><td>Phiếu mua hàng gốc (A3 type=9)</td></tr>
            <tr><td><code>source_blog_id</code></td><td>BIGINT</td><td></td><td>Nhập tại node nào</td></tr>
            <tr><td colspan="4" style="background:#f5f5f9;font-weight:600;font-size:12px;">── Số lượng ──</td></tr>
            <tr><td><code>batch_total_quantity</code></td><td>DECIMAL(15,3)</td><td></td><td>Tổng SL nhập</td></tr>
            <tr><td><code>batch_gift_quantity</code></td><td>DECIMAL(15,3)</td><td>DEFAULT 0</td><td>SL hàng tặng</td></tr>
            <tr><td><code>batch_distributed_quantity</code></td><td>DECIMAL(15,3)</td><td>DEFAULT 0</td><td>Đã rải xuống shop (KHÔNG trừ vào remaining)</td></tr>
            <tr><td><code>batch_sold_quantity</code></td><td>DECIMAL(15,3)</td><td>DEFAULT 0</td><td>Đã bán cho khách</td></tr>
            <tr><td><code>batch_damaged_quantity</code></td><td>DECIMAL(15,3)</td><td>DEFAULT 0</td><td>Hủy/hỏng</td></tr>
            <tr><td><code>batch_remaining_quantity</code></td><td>DECIMAL(15,3)</td><td></td><td>= total − sold − damaged</td></tr>
            <tr><td colspan="4" style="background:#f5f5f9;font-weight:600;font-size:12px;">── Giá vốn ──</td></tr>
            <tr><td><code>batch_total_cost</code></td><td>DECIMAL(15,3)</td><td></td><td>Tổng tiền vốn cả lô (sau CK, thuế)</td></tr>
            <tr><td><code>batch_avg_cost_per_unit</code></td><td>DECIMAL(15,3)</td><td></td><td>Giá vốn BQ/đơn vị = total_cost / total_qty</td></tr>
            <tr><td><code>batch_suggested_selling_price</code></td><td>DECIMAL(15,3)</td><td></td><td>Giá bán đề xuất</td></tr>
            <tr><td colspan="4" style="background:#f5f5f9;font-weight:600;font-size:12px;">── Thời gian ──</td></tr>
            <tr><td><code>batch_import_date</code></td><td>DATETIME</td><td></td><td>Ngày nhập kho</td></tr>
            <tr><td><code>batch_exp_date</code></td><td>DATE</td><td></td><td>HSD (NULL nếu SP ko tracking hoặc có sub-batch)</td></tr>
            <tr><td><code>batch_first_sold_date</code></td><td>DATETIME</td><td></td><td>Ngày bán SP đầu tiên</td></tr>
            <tr><td><code>batch_last_sold_date</code></td><td>DATETIME</td><td></td><td>Ngày bán SP cuối cùng</td></tr>
            <tr><td colspan="4" style="background:#f5f5f9;font-weight:600;font-size:12px;">── Phân bổ & cấu hình ──</td></tr>
            <tr><td><code>batch_distribution</code></td><td>JSON</td><td></td><td>[{"blog_id":5,"qty":100,"sold":30}]</td></tr>
            <tr><td><code>batch_costing_method</code></td><td>TINYINT</td><td>DEFAULT 1</td><td>1=FIFO, 2=BQ gia quyền</td></tr>
            <tr><td><code>batch_status</code></td><td>TINYINT</td><td></td><td>0=draft, 1=active, 2=hết hàng, 3=hết HSD, 4=hủy</td></tr>
            <tr><td><code>batch_note</code></td><td>TEXT</td><td></td><td>Ghi chú</td></tr>
            <tr><td><code>batch_meta</code></td><td>JSON</td><td></td><td>Mở rộng</td></tr>
            <tr><td><code>user_id</code></td><td>BIGINT</td><td></td><td>Người tạo</td></tr>
            <tr><td><code>is_deleted</code></td><td>TINYINT</td><td></td><td>0=chưa xóa</td></tr>
            <tr><td><code>deleted_at</code></td><td>DATETIME</td><td>NULL</td><td>Thời gian xóa mềm</td></tr>
            <tr><td><code>created_at</code></td><td>DATETIME</td><td></td><td>Tạo lúc</td></tr>
            <tr><td><code>updated_at</code></td><td>DATETIME</td><td></td><td>Cập nhật lúc</td></tr>
            </tbody>
        </table>
    </div>

    <!-- ────────── C6 ────────── -->
    <div class="bp-card" id="tbl-c6">
        <h3><i class='bx bx-cycling'></i> C6. batch_movement — Lịch sử di chuyển batch</h3>
        <p class="bp-text-muted">Ghi theo batch LÁ (leaf). Batch đi đâu, từ shop nào đến shop nào. · <strong>13 cột</strong></p>
        <table class="bp-table">
            <thead><tr><th>Cột</th><th>Kiểu</th><th>Ràng buộc</th><th>Mô tả</th></tr></thead>
            <tbody>
            <tr><td><code>movement_id</code></td><td>BIGINT</td><td>PK AI</td><td>Khóa chính</td></tr>
            <tr><td><code>batch_id</code></td><td>BIGINT</td><td></td><td>Batch lá nào (FK → C5)</td></tr>
            <tr><td><code>from_blog_id</code></td><td>BIGINT</td><td></td><td>Từ shop nào</td></tr>
            <tr><td><code>to_blog_id</code></td><td>BIGINT</td><td></td><td>Đến shop nào</td></tr>
            <tr><td><code>quantity</code></td><td>DECIMAL(15,3)</td><td></td><td>SL di chuyển</td></tr>
            <tr><td><code>movement_type</code></td><td>TINYINT</td><td></td><td>1=điều chuyển, 2=trả lại, 3=hủy</td></tr>
            <tr><td><code>source_ledger_id</code></td><td>BIGINT</td><td></td><td>Phiếu xuất/nhập liên quan</td></tr>
            <tr><td><code>source_ledger_blog_id</code></td><td>BIGINT</td><td></td><td>Blog chứa phiếu</td></tr>
            <tr><td><code>user_id</code></td><td>BIGINT</td><td></td><td>Người tạo</td></tr>
            <tr><td><code>is_deleted</code></td><td>TINYINT</td><td></td><td>0=chưa xóa</td></tr>
            <tr><td><code>deleted_at</code></td><td>DATETIME</td><td>NULL</td><td>Thời gian xóa mềm</td></tr>
            <tr><td><code>created_at</code></td><td>DATETIME</td><td></td><td>Tạo lúc</td></tr>
            <tr><td><code>updated_at</code></td><td>DATETIME</td><td></td><td>Cập nhật lúc</td></tr>
            </tbody>
        </table>
    </div>

    <!-- ────────── C7 ────────── -->
    <div class="bp-card" id="tbl-c7">
        <h3><i class='bx bx-money'></i> C7. supplier_payment — Công nợ NCC</h3>
        <p class="bp-text-muted">Mỗi phiếu mua = 1 bản ghi payment. Nhóm được theo lô. · <strong>24 cột</strong> · <span class="bp-badge bp-badge-new">lot_id 24/02</span></p>
        <table class="bp-table">
            <thead><tr><th>Cột</th><th>Kiểu</th><th>Ràng buộc</th><th>Mô tả</th></tr></thead>
            <tbody>
            <tr><td><code>payment_id</code></td><td>BIGINT</td><td>PK AI</td><td>Khóa chính</td></tr>
            <tr><td><code>payment_code</code></td><td>VARCHAR(100)</td><td></td><td>Mã phiếu TT</td></tr>
            <tr><td><code>contract_id</code></td><td>BIGINT</td><td></td><td>HĐ nào (FK → C1)</td></tr>
            <tr class="col-new"><td><code>lot_id</code> 🆕<small> 24/02</small></td><td>BIGINT</td><td>NULL</td><td>Lô mua nào (FK → C2) — nhóm công nợ theo lô</td></tr>
            <tr><td><code>purchase_policy_id</code></td><td>BIGINT</td><td></td><td>CS nào (FK → C3)</td></tr>
            <tr><td><code>source_ledger_id</code></td><td>BIGINT</td><td></td><td>Phiếu mua gốc (A3 type=9)</td></tr>
            <tr><td><code>source_ledger_blog_id</code></td><td>BIGINT</td><td></td><td>Blog chứa phiếu mua</td></tr>
            <tr><td><code>ledger_person_id</code></td><td>BIGINT</td><td></td><td>NCC (FK → A2)</td></tr>
            <tr><td><code>ledger_person_blog_id</code></td><td>BIGINT</td><td></td><td>Blog chứa NCC</td></tr>
            <tr><td><code>batch_ids</code></td><td>JSON</td><td></td><td>TT cho batch nào [1,2,3]</td></tr>
            <tr><td><code>payment_total_amount</code></td><td>DECIMAL(15,3)</td><td></td><td>Tổng tiền phải trả (đợt này)</td></tr>
            <tr><td><code>payment_paid_amount</code></td><td>DECIMAL(15,3)</td><td>DEFAULT 0</td><td>Đã trả</td></tr>
            <tr><td><code>payment_remaining</code></td><td>DECIMAL(15,3)</td><td></td><td>Còn nợ</td></tr>
            <tr><td><code>payment_due_date</code></td><td>DATE</td><td></td><td>Hạn thanh toán</td></tr>
            <tr><td><code>payment_status</code></td><td>TINYINT</td><td></td><td>0=chưa TT, 1=1 phần, 2=đủ, 3=quá hạn</td></tr>
            <tr><td><code>early_payment_discount</code></td><td>DECIMAL(15,3)</td><td>DEFAULT 0</td><td>CK thanh toán sớm</td></tr>
            <tr><td><code>payment_history</code></td><td>JSON</td><td></td><td>Lịch sử TT: [{"date":"…","amount":…,"method":"bank"}]</td></tr>
            <tr><td><code>payment_meta</code></td><td>JSON</td><td></td><td>Mở rộng</td></tr>
            <tr><td><code>source_blog_id</code></td><td>BIGINT</td><td></td><td>Tạo từ node nào</td></tr>
            <tr><td><code>user_id</code></td><td>BIGINT</td><td></td><td>Người tạo</td></tr>
            <tr><td><code>is_deleted</code></td><td>TINYINT</td><td></td><td>0=chưa xóa</td></tr>
            <tr><td><code>deleted_at</code></td><td>DATETIME</td><td>NULL</td><td>Thời gian xóa mềm</td></tr>
            <tr><td><code>created_at</code></td><td>DATETIME</td><td></td><td>Tạo lúc</td></tr>
            <tr><td><code>updated_at</code></td><td>DATETIME</td><td></td><td>Cập nhật lúc</td></tr>
            </tbody>
        </table>
    </div>

    <!-- ────────── C8 ────────── -->
    <div class="bp-card" id="tbl-c8">
        <h3><i class='bx bx-purchase-tag'></i> C8. selling_policy — Chính sách bán ra</h3>
        <p class="bp-text-muted">Auto-apply khi bán hàng. Nhân viên KHÔNG CẦN NHỚ. · <strong>22 cột</strong></p>
        <table class="bp-table">
            <thead><tr><th>Cột</th><th>Kiểu</th><th>Ràng buộc</th><th>Mô tả</th></tr></thead>
            <tbody>
            <tr><td><code>selling_policy_id</code></td><td>BIGINT</td><td>PK AI</td><td>Khóa chính</td></tr>
            <tr><td><code>selling_policy_code</code></td><td>VARCHAR(100)</td><td></td><td>Mã CS bán</td></tr>
            <tr><td><code>selling_policy_title</code></td><td>TEXT</td><td></td><td>"KM Tết 2026 — Mua 2 tặng 1"</td></tr>
            <tr><td><code>selling_policy_type</code></td><td>TINYINT</td><td></td><td>1=giảm giá, 2=tặng SP, 3=combo, 4=theo batch, 5=đặc biệt</td></tr>
            <tr><td><code>selling_rules</code></td><td>JSON</td><td></td><td>Toàn bộ rule bán (fixed_price, buy_x_get_y, combo…)</td></tr>
            <tr><td><code>product_skus</code></td><td>JSON</td><td></td><td>SKU áp dụng: ["SKU001","SKU002"]</td></tr>
            <tr><td><code>apply_to_blog_ids</code></td><td>JSON</td><td></td><td>Shop nào: [1,5,10]</td></tr>
            <tr><td><code>apply_to_org_level</code></td><td>JSON</td><td></td><td>Cấp tổ chức: {"level":"region","name":"mien_bac"}</td></tr>
            <tr><td><code>apply_to_batch_ids</code></td><td>JSON</td><td></td><td>Batch cụ thể: [101,102]</td></tr>
            <tr><td><code>auto_apply</code></td><td>TINYINT</td><td>DEFAULT 1</td><td>1=tự động, nhân viên ko cần chọn</td></tr>
            <tr><td><code>selling_policy_priority</code></td><td>INT</td><td></td><td>Ưu tiên (số nhỏ = ưu tiên cao)</td></tr>
            <tr><td><code>selling_policy_parent_id</code></td><td>BIGINT</td><td></td><td>Kế thừa từ cấp trên</td></tr>
            <tr><td><code>selling_policy_start_date</code></td><td>BIGINT</td><td></td><td>Timestamp bắt đầu</td></tr>
            <tr><td><code>selling_policy_end_date</code></td><td>BIGINT</td><td></td><td>Timestamp kết thúc</td></tr>
            <tr><td><code>selling_policy_status</code></td><td>TINYINT</td><td></td><td>0=draft, 1=active, 2=expired</td></tr>
            <tr><td><code>selling_policy_meta</code></td><td>JSON</td><td></td><td>Mở rộng</td></tr>
            <tr><td><code>source_blog_id</code></td><td>BIGINT</td><td></td><td>Tạo từ node nào</td></tr>
            <tr><td><code>user_id</code></td><td>BIGINT</td><td></td><td>Người tạo</td></tr>
            <tr><td><code>is_deleted</code></td><td>TINYINT</td><td></td><td>0=chưa xóa</td></tr>
            <tr><td><code>deleted_at</code></td><td>DATETIME</td><td>NULL</td><td>Thời gian xóa mềm</td></tr>
            <tr><td><code>created_at</code></td><td>DATETIME</td><td></td><td>Tạo lúc</td></tr>
            <tr><td><code>updated_at</code></td><td>DATETIME</td><td></td><td>Cập nhật lúc</td></tr>
            </tbody>
        </table>

        <div class="bp-collapsible" style="margin-top:12px;">
            <div class="bp-collapsible-header"><i class='bx bx-list-ul'></i> Bảng mã selling_policy_type (5 loại)</div>
            <div class="bp-collapsible-body">
                <table class="bp-table" style="font-size:13px;">
                    <tr><th>Type</th><th>Tên</th><th>Mô tả</th></tr>
                    <tr><td>1</td><td>Giảm giá</td><td>Giá bán cố định hoặc CK %</td></tr>
                    <tr><td>2</td><td>Tặng SP</td><td>Mua X tặng Y</td></tr>
                    <tr><td>3</td><td>Combo</td><td>Mua set → giá combo</td></tr>
                    <tr><td>4</td><td>Theo batch</td><td>Áp CS cho batch cụ thể (VD: sắp hết HSD → giảm 20%)</td></tr>
                    <tr><td>5</td><td>Đặc biệt</td><td>Logic phức tạp trong JSON</td></tr>
                </table>
            </div>
        </div>

        <div class="bp-highlight" style="margin-top:12px;">
            📌 <strong>Tại sao dùng JSON thay bảng riêng?</strong> Bên BÁN đơn giản hơn bên MUA, JSON đủ linh hoạt.
            Nếu sau này &gt;20 rule/policy → tách ra bảng selling_policy_item (tương tự C4).
        </div>
    </div>

    <!-- ────────── C9 ────────── -->
    <div class="bp-card" id="tbl-c9" style="border-left:4px solid var(--bp-lot)">
        <h3><i class='bx bx-refresh'></i> C9. reorder_suggestion — 🆕 Đề xuất mua/chuyển kho tự động <span class="bp-badge bp-badge-new">MỚI v9c</span></h3>
        <p class="bp-text-muted">Hệ thống quét C2c → so sánh tồn kho thực → sinh đề xuất. Duyệt xong → tạo phiếu mua/chuyển. · <strong>23 cột</strong></p>
        <div class="bp-highlight bp-highlight-info" style="margin-bottom:12px;">
            💡 <strong>Demo lúc trình bày:</strong> Bấm nút "Quét đề xuất" → hệ thống scan tất cả C2c configs → tính stock từ <code>batch_distribution</code>
            → tìm shop thiếu (stock &lt; min_qty) → tìm shop thừa (stock &gt; max_qty) → sinh đề xuất: <em>chuyển kho</em> (nếu có shop thừa) hoặc <em>mua thêm</em> (nếu không).<br>
            <strong>4 AJAX endpoints:</strong> <code>tgs_purchase_reorder_scan</code> · <code>tgs_purchase_reorder_list</code> · <code>tgs_purchase_reorder_action</code> · <code>tgs_purchase_reorder_summary</code>
        </div>
        <table class="bp-table">
            <thead><tr><th>Cột</th><th>Kiểu</th><th>Ràng buộc</th><th>Mô tả</th></tr></thead>
            <tbody>
            <tr><td><code>suggestion_id</code></td><td>BIGINT</td><td>PK AI</td><td>Khóa chính</td></tr>
            <tr><td><code>blog_id</code></td><td>BIGINT</td><td>NOT NULL</td><td>Shop CẦN hàng (shop đang thiếu tồn kho)</td></tr>
            <tr><td><code>blog_name_cache</code></td><td>VARCHAR(255)</td><td></td><td>Tên shop (cache)</td></tr>
            <tr><td><code>product_sku</code></td><td>VARCHAR(255)</td><td>NOT NULL</td><td>SKU sản phẩm bị thiếu</td></tr>
            <tr><td><code>lot_item_id</code></td><td>BIGINT</td><td></td><td>Liên kết C2b lot_item (nếu có)</td></tr>
            <tr><td colspan="4" style="background:#f5f5f9;font-weight:600;font-size:12px;">── Tồn kho & thiếu hụt ──</td></tr>
            <tr><td><code>current_stock</code></td><td>DECIMAL(15,3)</td><td></td><td>Tồn kho thực tại thời điểm scan (= qty − sold − damaged − transferred_out)</td></tr>
            <tr><td><code>min_qty</code></td><td>DECIMAL(15,3)</td><td></td><td>Ngưỡng min (copy từ C2c lúc scan)</td></tr>
            <tr><td><code>max_qty</code></td><td>DECIMAL(15,3)</td><td></td><td>Ngưỡng max (copy từ C2c lúc scan)</td></tr>
            <tr><td><code>deficit_qty</code></td><td>DECIMAL(15,3)</td><td></td><td>= min_qty − current_stock (lượng cần bổ sung)</td></tr>
            <tr><td colspan="4" style="background:#f5f5f9;font-weight:600;font-size:12px;">── Đề xuất hành động ──</td></tr>
            <tr><td><code>suggested_action</code></td><td>TINYINT</td><td>DEFAULT 1</td><td><strong>1=Mua thêm</strong> từ NCC · <strong>2=Chuyển kho</strong> từ shop thừa</td></tr>
            <tr><td><code>source_blog_id</code></td><td>BIGINT</td><td></td><td>Shop NGUỒN (nếu action=2, shop có surplus)</td></tr>
            <tr><td><code>source_blog_name_cache</code></td><td>VARCHAR(255)</td><td></td><td>Tên shop nguồn</td></tr>
            <tr><td><code>source_surplus</code></td><td>DECIMAL(15,3)</td><td></td><td>Lượng dư tại shop nguồn (stock − max_qty)</td></tr>
            <tr><td colspan="4" style="background:#f5f5f9;font-weight:600;font-size:12px;">── Trạng thái & liên kết ──</td></tr>
            <tr><td><code>status</code></td><td>TINYINT</td><td>DEFAULT 0</td><td>0=pending · 1=approved · 2=rejected · 3=completed</td></tr>
            <tr><td><code>linked_ledger_id</code></td><td>BIGINT</td><td></td><td>Phiếu mua/chuyển được tạo từ đề xuất này</td></tr>
            <tr><td><code>linked_ledger_blog_id</code></td><td>BIGINT</td><td></td><td>Blog chứa phiếu</td></tr>
            <tr><td><code>note</code></td><td>TEXT</td><td></td><td>Ghi chú (lý do duyệt/từ chối)</td></tr>
            <tr><td><code>scan_batch_id</code></td><td>VARCHAR(50)</td><td></td><td>Mã đợt quét — nhóm cùng 1 lần scan (VD: SCAN-20260307-143022)</td></tr>
            <tr><td colspan="4" style="background:#f5f5f9;font-weight:600;font-size:12px;">── Audit ──</td></tr>
            <tr><td><code>user_id</code></td><td>BIGINT</td><td></td><td>Người thực hiện scan</td></tr>
            <tr><td><code>is_deleted</code></td><td>TINYINT</td><td></td><td>0=chưa xóa</td></tr>
            <tr><td><code>deleted_at</code></td><td>DATETIME</td><td>NULL</td><td>Thời gian xóa mềm</td></tr>
            <tr><td><code>created_at</code></td><td>DATETIME</td><td></td><td>Tạo lúc</td></tr>
            <tr><td><code>updated_at</code></td><td>DATETIME</td><td></td><td>Cập nhật lúc</td></tr>
            </tbody>
        </table>

        <div class="bp-highlight bp-highlight-new" style="margin-top:12px;">
            📌 <strong>Logic scan (class-purchase-auto-reorder.php):</strong><br>
            1. Query C2c: <code>SELECT blog_id, product_sku, MAX(min_qty), MAX(max_qty) GROUP BY blog_id, product_sku</code><br>
            2. Tính stock per shop: <code>SUM(qty - sold - damaged - transferred_out)</code> từ batch_distribution (leaf batches)<br>
            3. Nếu stock &lt; min_qty → deficit = min_qty − stock → tìm shop thừa<br>
            4. Shop thừa = shop có stock &gt; max_qty → surplus = stock − max_qty<br>
            5. Có shop thừa → action=2 (chuyển kho) · Không shop thừa → action=1 (mua thêm)<br>
            <strong>📌 GROUP BY blog_id, product_sku</strong> — tránh duplicate khi cùng SKU xuất hiện trong nhiều lô.
        </div>
    </div>


    <!-- ╔════════════════════════════════════════════════════════════════════╗ -->
    <!-- ║  INDEX RECOMMENDATIONS                                            ║ -->
    <!-- ╚════════════════════════════════════════════════════════════════════╝ -->
    <div class="bp-card">
        <h3><i class='bx bx-rocket'></i> Khuyến nghị INDEX (Performance)</h3>
        <table class="bp-table">
            <thead><tr><th>Bảng</th><th>INDEX</th><th>Lý do</th></tr></thead>
            <tbody>
            <tr>
                <td><strong>C5 batch</strong></td>
                <td><code>(product_sku, batch_status, batch_import_date)</code></td>
                <td>FIFO query batch lá theo SKU + status + date → phải NHANH</td>
            </tr>
            <tr>
                <td><strong>C5 batch</strong></td>
                <td><code>(parent_batch_id)</code></td>
                <td>Query đệ quy: tìm con của batch cha</td>
            </tr>
            <tr>
                <td><strong>C2b lot_item</strong></td>
                <td><code>(lot_id, product_sku)</code> UNIQUE</td>
                <td>1 lô không trùng SKU + query nhanh per-SKU</td>
            </tr>
            <tr>
                <td><strong>C5 batch</strong></td>
                <td><code>(lot_id)</code></td>
                <td>Thống kê theo lô mua</td>
            </tr>
            <tr>
                <td><strong>C7 payment</strong></td>
                <td><code>(lot_id)</code></td>
                <td>SUM công nợ theo lô</td>
            </tr>
            <tr>
                <td><strong>C7 payment</strong></td>
                <td><code>(ledger_person_id)</code></td>
                <td>Tổng nợ NCC</td>
            </tr>
            <tr>
                <td><strong>C3 policy</strong></td>
                <td><code>(lot_id)</code></td>
                <td>Tìm CS theo lô</td>
            </tr>
            <tr>
                <td><strong>B2 product_lots</strong></td>
                <td><code>(batch_id)</code></td>
                <td>Tìm lot vật lý theo batch lá</td>
            </tr>
            <tr class="col-new">
                <td><strong>C2c shop_config</strong> 🆕</td>
                <td><code>(lot_item_id, blog_id)</code> UNIQUE</td>
                <td>1 shop 1 config per lot_item</td>
            </tr>
            <tr class="col-new">
                <td><strong>C2c shop_config</strong> 🆕</td>
                <td><code>(product_sku, blog_id)</code></td>
                <td>Auto-reorder scan GROUP BY sku+shop</td>
            </tr>
            <tr class="col-new">
                <td><strong>C9 reorder</strong> 🆕</td>
                <td><code>(scan_batch_id)</code></td>
                <td>Nhóm đề xuất cùng 1 đợt quét</td>
            </tr>
            <tr class="col-new">
                <td><strong>C9 reorder</strong> 🆕</td>
                <td><code>(blog_id, status)</code></td>
                <td>Lọc đề xuất theo shop + trạng thái</td>
            </tr>
            </tbody>
        </table>

        <div class="bp-highlight bp-highlight-info" style="margin-top:12px;">
            💡 <strong>batch_distribution</strong> (JSON lưu per-shop): Nếu chậm khi scale lớn →
            tách ra bảng <code>wp_global_batch_shop_allocation</code>. Hiện tại JSON đủ dùng.
        </div>
    </div>


    <!-- ══════════════ NAV ══════════════ -->
    <div class="bp-nav">
        <a href="<?php echo tgs_bp_url('bp-chinh-sach-ban'); ?>"><i class='bx bx-arrow-back'></i> Chính Sách Bán</a>
        <a href="<?php echo tgs_bp_url('bp-tong-quan'); ?>">🏠 Về Tổng Quan <i class='bx bx-arrow-to-right'></i></a>
    </div>

</div>
