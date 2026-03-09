<?php if (!defined('ABSPATH')) exit; ?>

<div class="bp-page">

    <!-- ══════════════ HERO ══════════════ -->
    <div class="bp-hero" style="background:linear-gradient(135deg, #4daa3e 0%, #71dd37 100%);">
        <div>
            <h2><i class='bx bx-package'></i> C2. Lô Mua NCC + C2b. Dòng SP Lô</h2>
            <p>Cam kết mua N sản phẩm × SL lớn từ NCC, nhập nhiều đợt, theo dõi tiến độ theo TỪNG SKU</p>
        </div>
        <div class="bp-hero-right">
            <span class="bp-badge bp-badge-new" style="font-size:14px;padding:6px 16px;">🆕 Cập nhật 24/02</span>
        </div>
    </div>

    <!-- ══════════════ KHÁI NIỆM ══════════════ -->
    <div class="bp-card">
        <h3><i class='bx bx-bulb'></i> Lô mua NCC là gì?</h3>

        <div class="bp-grid bp-grid-2">
            <div>
                <p style="font-size:15px;line-height:1.8">
                    <strong>Lô mua NCC</strong> = cam kết mua <strong>nhiều sản phẩm</strong> với số lượng lớn
                    từ NCC trong một khoảng thời gian.<br><br>
                    Mỗi lô gồm <strong>N dòng SP</strong> (C2b lot_item) — mỗi SKU có SL cam kết, giá, ngưỡng gợi ý riêng.<br><br>
                    Nhập hàng chia nhiều đợt → mỗi đợt chọn SKU nào cần nhập → sinh batch → công nợ.<br>
                    Hệ thống theo dõi <strong>tiến độ nhập từng SKU</strong> và gợi ý nhập tiếp khi tồn kho thấp.
                </p>
            </div>
            <div>
                <div class="bp-example">
                    <div class="bp-example-title"><i class='bx bx-package'></i> Ví dụ: Lô mua Vinamilk Q1/2026</div>
                    <table class="bp-table">
                        <tr><td>Mã lô</td><td><strong>VNM-LOT-2026-Q1</strong></td></tr>
                        <tr><td>Hợp đồng</td><td>HD-VNM-2026-001</td></tr>
                        <tr><td>NCC</td><td>Vinamilk</td></tr>
                        <tr><td>Số dòng SP</td><td><strong>3 sản phẩm</strong></td></tr>
                        <tr><td>Tổng giá trị</td><td>~1.55 tỷ VNĐ</td></tr>
                        <tr><td>Auto reorder</td><td>✅ Bật — ngưỡng mỗi SKU riêng</td></tr>
                    </table>
                </div>
            </div>
        </div>

        <!-- Bảng lot_items trực quan -->
        <h4 style="margin-top:20px"><i class='bx bx-list-check'></i> 3 dòng SP trong lô (C2b lot_item)</h4>
        <table class="bp-table">
            <thead>
                <tr>
                    <th>SKU</th>
                    <th>Sản phẩm</th>
                    <th style="text-align:right">Cam kết</th>
                    <th style="text-align:right">Đơn giá</th>
                    <th style="text-align:right">Đã nhập</th>
                    <th style="text-align:right">Chưa nhập</th>
                    <th style="text-align:center">Ngưỡng</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><code>SKU-DL01</code></td>
                    <td>Dielac Alpha 900g</td>
                    <td style="text-align:right"><strong>5,000</strong></td>
                    <td style="text-align:right">180,000đ</td>
                    <td style="text-align:right">3,500</td>
                    <td style="text-align:right;color:var(--bp-batch)">1,500</td>
                    <td style="text-align:center">20%</td>
                </tr>
                <tr>
                    <td><code>SKU-GR02</code></td>
                    <td>Dielac Grow 900g</td>
                    <td style="text-align:right"><strong>3,000</strong></td>
                    <td style="text-align:right">150,000đ</td>
                    <td style="text-align:right">1,000</td>
                    <td style="text-align:right;color:var(--bp-batch)">2,000</td>
                    <td style="text-align:center">20%</td>
                </tr>
                <tr>
                    <td><code>SKU-TU03</code></td>
                    <td>Sữa tươi Vinamilk 1L</td>
                    <td style="text-align:right"><strong>2,000</strong></td>
                    <td style="text-align:right">100,000đ</td>
                    <td style="text-align:right">1,000</td>
                    <td style="text-align:right;color:var(--bp-batch)">1,000</td>
                    <td style="text-align:center">25%</td>
                </tr>
            </tbody>
            <tfoot>
                <tr style="font-weight:600;background:#f5f5f9">
                    <td colspan="2">Tổng lô</td>
                    <td style="text-align:right">10,000</td>
                    <td style="text-align:right">~1.55 tỷ</td>
                    <td style="text-align:right">5,500</td>
                    <td style="text-align:right;color:var(--bp-batch)">4,500</td>
                    <td></td>
                </tr>
            </tfoot>
        </table>
    </div>

    <!-- ══════════════ QUAN HỆ ══════════════ -->
    <div class="bp-card">
        <h3><i class='bx bx-git-branch'></i> Quan hệ: HĐ → N Lô → N Dòng SP → N Đợt nhập</h3>

        <div class="bp-flow" style="justify-content:center;">
            <div class="bp-flow-box" style="border-color:var(--bp-contract)">
                HĐ Vinamilk<small>contract_id = 1</small>
            </div>
            <span class="bp-flow-arrow">→</span>
            <div class="bp-flow-box" style="border-color:var(--bp-lot)">
                Lô Q1/2026<small>lot_id = 5</small>
            </div>
            <span class="bp-flow-arrow">→</span>
            <div style="display:flex;flex-direction:column;gap:6px;">
                <div class="bp-flow-box" style="border-color:var(--bp-lot);font-size:12px;background:#f0fff0;">
                    Dielac 5,000<small>C2b · SKU-DL01</small>
                </div>
                <div class="bp-flow-box" style="border-color:var(--bp-lot);font-size:12px;background:#f0fff0;">
                    Grow 3,000<small>C2b · SKU-GR02</small>
                </div>
                <div class="bp-flow-box" style="border-color:var(--bp-lot);font-size:12px;background:#f0fff0;">
                    Sữa tươi 2,000<small>C2b · SKU-TU03</small>
                </div>
            </div>
            <span class="bp-flow-arrow">→</span>
            <div style="display:flex;flex-direction:column;gap:6px;">
                <div class="bp-flow-box" style="border-color:var(--bp-primary);font-size:12px;">
                    Đợt 1: DL 2,000 + GR 1,000<small>Phiếu PM-001</small>
                </div>
                <div class="bp-flow-box" style="border-color:var(--bp-primary);font-size:12px;">
                    Đợt 2: DL 1,500 + TU 1,000<small>Phiếu PM-002</small>
                </div>
                <div class="bp-flow-box" style="border-color:var(--bp-payment);font-size:12px;border-style:dashed;">
                    Đợt 3: ?<small>Chưa nhập</small>
                </div>
            </div>
            <span class="bp-flow-arrow">→</span>
            <div style="display:flex;flex-direction:column;gap:6px;">
                <span class="bp-badge bp-badge-danger">Batch #100 (DL)</span>
                <span class="bp-badge bp-badge-danger">Batch #101 (GR)</span>
                <span class="bp-badge bp-badge-danger">Batch #200 (DL)</span>
                <span class="bp-badge bp-badge-danger">Batch #201 (TU)</span>
                <span class="bp-badge bp-badge-info" style="opacity:.5">Batch ?</span>
            </div>
        </div>

        <div class="bp-highlight bp-highlight-new" style="margin-top:16px;">
            💡 <strong>1 HĐ → N Lô</strong> · <strong>1 Lô → N Dòng SP</strong> (C2b, mỗi SKU 1 dòng) ·
            <strong>1 Lô → N Phiếu mua</strong> (mỗi đợt chọn SKU cần nhập) ·
            <strong>Lô không bắt buộc HĐ</strong> (contract_id nullable) ·
            <strong>Lô chưa cần CS</strong> (tạo lô trước, gắn CS sau)
        </div>
    </div>

    <!-- ══════════════ CẤU TRÚC 2 BẢNG ══════════════ -->
    <div class="bp-card">
        <h3><i class='bx bx-table'></i> Cấu trúc bảng</h3>

        <div class="bp-tab-group">
            <div class="bp-tabs">
                <div class="bp-tab active" data-tab="lot-main">C2. purchase_lot</div>
                <div class="bp-tab" data-tab="lot-item">C2b. lot_item 🆕</div>
                <div class="bp-tab" data-tab="reorder">Gợi ý tái nhập</div>
                <div class="bp-tab" data-tab="usage">Cách sử dụng</div>
            </div>

            <!-- Tab: C2 purchase_lot -->
            <div class="bp-tab-content active" data-tab-content="lot-main">
                <p class="bp-text-muted" style="margin-bottom:12px;">Bảng cha — lưu thông tin lô tổng. Chi tiết từng SP → xem C2b.</p>
                <table class="bp-table">
                    <tr><th>Cột</th><th>Kiểu</th><th>Mô tả</th></tr>
                    <tr><td><code>lot_id</code></td><td>BIGINT PK</td><td>Khóa chính</td></tr>
                    <tr><td><code>lot_code</code></td><td>VARCHAR(100)</td><td>Mã lô: VNM-LOT-2026-001</td></tr>
                    <tr><td><code>lot_title</code></td><td>TEXT</td><td>"Lô mua Vinamilk Q1/2026"</td></tr>
                    <tr><td><code>contract_id</code></td><td>BIGINT</td><td>Hợp đồng (nullable)</td></tr>
                    <tr><td><code>ledger_person_id</code></td><td>BIGINT</td><td>NCC</td></tr>
                    <tr><td colspan="3" style="background:#f5f5f9;font-weight:600">── Cam kết (tổng hợp từ C2b) ──</td></tr>
                    <tr><td><code>lot_total_committed_value</code></td><td>DECIMAL(15,3)</td><td>= SUM(lot_item.committed_value)</td></tr>
                    <tr><td><code>lot_total_items</code></td><td>INT</td><td>Số dòng SP (cache count)</td></tr>
                    <tr><td colspan="3" style="background:#f5f5f9;font-weight:600">── Thời gian ──</td></tr>
                    <tr><td><code>lot_start_date</code></td><td>DATE</td><td>Bắt đầu cam kết</td></tr>
                    <tr><td><code>lot_end_date</code></td><td>DATE</td><td>Kết thúc cam kết</td></tr>
                    <tr><td colspan="3" style="background:#f5f5f9;font-weight:600">── Tái nhập ──</td></tr>
                    <tr><td><code>auto_reorder_enabled</code></td><td>TINYINT</td><td>1=bật gợi ý nhập tiếp</td></tr>
                    <tr><td><code>reorder_notify_roles</code></td><td>JSON</td><td>Ai nhận thông báo</td></tr>
                    <tr><td colspan="3" style="background:#f5f5f9;font-weight:600">── Trạng thái ──</td></tr>
                    <tr><td><code>lot_status</code></td><td>TINYINT</td><td>0=draft, 1=active, 2=completed, 3=cancelled</td></tr>
                </table>

                <div class="bp-highlight bp-highlight-info" style="margin-top:12px;">
                    📌 <strong>Thay đổi so với thiết kế cũ:</strong> Các cột <code>lot_total_committed_qty</code>,
                    <code>lot_imported_qty</code>, <code>lot_remaining_qty</code>, <code>reorder_threshold</code>
                    đã <strong>chuyển xuống C2b lot_item</strong> và đổi thành <code>reorder_threshold_qty</code> (số lượng thay vì %).
                </div>
            </div>

            <!-- Tab: C2b lot_item -->
            <div class="bp-tab-content" data-tab-content="lot-item">
                <p class="bp-text-muted" style="margin-bottom:12px;">Bảng con — mỗi dòng = 1 SKU trong lô. UNIQUE (lot_id, product_sku).</p>
                <table class="bp-table">
                    <tr><th>Cột</th><th>Kiểu</th><th>Mô tả</th></tr>
                    <tr class="col-new"><td><code>lot_item_id</code></td><td>BIGINT PK</td><td>Khóa chính</td></tr>
                    <tr class="col-new"><td><code>lot_id</code></td><td>BIGINT FK → C2</td><td>Thuộc lô nào</td></tr>
                    <tr class="col-new"><td><code>product_sku</code></td><td>VARCHAR(255)</td><td>SKU sản phẩm</td></tr>
                    <tr class="col-new"><td><code>product_name_cache</code></td><td>VARCHAR(500)</td><td>Tên SP (cache, tránh join)</td></tr>
                    <tr><td colspan="3" style="background:#f5f5f9;font-weight:600">── Cam kết ──</td></tr>
                    <tr class="col-new"><td><code>committed_qty</code></td><td>DECIMAL(15,3)</td><td>SL cam kết mua</td></tr>
                    <tr class="col-new"><td><code>committed_unit_price</code></td><td>DECIMAL(15,3)</td><td>Giá cam kết / đơn vị</td></tr>
                    <tr class="col-new"><td><code>committed_value</code></td><td>DECIMAL(15,3)</td><td>= committed_qty × unit_price</td></tr>
                    <tr><td colspan="3" style="background:#f5f5f9;font-weight:600">── Tiến độ nhập ──</td></tr>
                    <tr class="col-new"><td><code>imported_qty</code></td><td>DECIMAL(15,3)</td><td>Đã nhập = SUM(batch.total_qty WHERE lot_id & sku)</td></tr>
                    <tr class="col-new"><td><code>remaining_qty</code></td><td>DECIMAL(15,3)</td><td>Chưa nhập = committed_qty − imported_qty</td></tr>
                    <tr><td colspan="3" style="background:#f5f5f9;font-weight:600">── Gợi ý tái nhập (per-SKU) ──</td></tr>
                    <tr class="col-new"><td><code>reorder_threshold_qty</code></td><td>INT</td><td>Ngưỡng số lượng → tồn kho ≤ số này thì nhắc nhập tiếp</td></tr>
                    <tr><td colspan="3" style="background:#f5f5f9;font-weight:600">── Mở rộng ──</td></tr>
                    <tr class="col-new"><td><code>lot_item_note</code></td><td>TEXT</td><td>Ghi chú</td></tr>
                    <tr class="col-new"><td><code>lot_item_meta</code></td><td>JSON</td><td>Mở rộng</td></tr>
                </table>

                <div class="bp-highlight bp-highlight-new" style="margin-top:12px;">
                    ✅ <strong>UNIQUE (lot_id, product_sku)</strong> — mỗi lô chỉ có 1 dòng cho mỗi SKU.<br>
                    ✅ Batch (C5) liên kết ngược qua <code>lot_id + product_sku</code> — không cần FK trực tiếp đến lot_item.
                </div>
            </div>

            <!-- Tab: Gợi ý tái nhập -->
            <div class="bp-tab-content" data-tab-content="reorder">
                <div class="bp-highlight bp-highlight-info" style="margin-bottom:16px;">
                    📌 <strong>Gợi ý nhập tiếp kiểm tra TẪNG SKU riêng biệt</strong> — mỗi SP có ngưỡng <code>reorder_threshold_qty</code> riêng trong C2b.
                </div>

                <div class="bp-formula">
                    FOREACH lot_item IN lot:<br>
                    &nbsp;&nbsp;SUM(batch_lá.remaining WHERE lot_id = X AND sku = S) ≤ lot_item.reorder_threshold_qty → 🔔 NHẮC
                </div>

                <div class="bp-example" style="margin-top:16px;">
                    <div class="bp-example-title"><i class='bx bx-bell'></i> Ví dụ trigger theo từng SKU</div>
                    <table class="bp-table" style="font-size:13px;">
                        <thead><tr><th>SKU</th><th>committed</th><th>Ngưỡng</th><th>Tồn kho batch lá</th><th>Kết quả</th></tr></thead>
                        <tbody>
                            <tr>
                                <td>SKU-DL01 (Dielac)</td>
                                <td>5,000</td>
                                <td>1,000</td>
                                <td>900</td>
                                <td>🔔 <strong>NHẮC!</strong> "Dielac tồn 900 ≤ ngưỡng 1,000"</td>
                            </tr>
                            <tr>
                                <td>SKU-GR02 (Grow)</td>
                                <td>3,000</td>
                                <td>600</td>
                                <td>800</td>
                                <td>✅ OK — tồn 800 > ngưỡng 600</td>
                            </tr>
                            <tr>
                                <td>SKU-TU03 (Sữa tươi)</td>
                                <td>2,000</td>
                                <td>500</td>
                                <td>400</td>
                                <td>🔔 <strong>NHẮC!</strong> "Sữa tươi tồn 400 ≤ ngưỡng 500"</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="bp-example" style="margin-top:12px;">
                    <div class="bp-example-title"><i class='bx bx-trophy'></i> Gợi ý quyền lợi NCC (tích lũy theo SKU)</div>
                    <p style="font-size:14px;line-height:1.8">
                        Khi <code>lot_item.imported_qty</code> đạt mốc tích lũy (policy_item type=7):<br>
                        → <em>"Dielac: đã mua 4,500/5,000 — đạt CK bậc 3 (8%). Gợi ý đòi quyền lợi NCC."</em><br>
                        → Có thể tính theo từng SKU hoặc tổng lô tùy cấu hình policy.
                    </p>
                </div>
            </div>

            <!-- Tab: Cách sử dụng -->
            <div class="bp-tab-content" data-tab-content="usage">
                <h4>8 bước sử dụng lô mua (multi-product)</h4>
                <div class="bp-timeline" style="padding-left:40px;">
                    <div class="bp-step">
                        <div class="bp-step-dot">1</div>
                        <div class="bp-step-desc">Ký HĐ Vinamilk → Tạo lô: "Lô mua Vinamilk Q1/2026"</div>
                    </div>
                    <div class="bp-step">
                        <div class="bp-step-dot new">2</div>
                        <div class="bp-step-desc">
                            Thêm <strong>N dòng lot_item</strong> (C2b):<br>
                            · Dielac 5,000 thùng × 180,000đ<br>
                            · Grow 3,000 thùng × 150,000đ<br>
                            · Sữa tươi 2,000 thùng × 100,000đ
                        </div>
                    </div>
                    <div class="bp-step">
                        <div class="bp-step-dot new">3</div>
                        <div class="bp-step-desc">
                            <strong>Set MIN/MAX tồn kho per shop</strong> (C2c) <span class="bp-badge bp-badge-new">v9c</span><br>
                            · Shop #5: Dielac min=10, max=50<br>
                            · Shop #8: Dielac min=5, max=30<br>
                            → Hệ thống tự quét → sinh đề xuất (C9)
                        </div>
                    </div>
                    <div class="bp-step">
                        <div class="bp-step-dot">4</div>
                        <div class="bp-step-desc">Tạo CS mua (C3) với <code>lot_id = lô này</code> → CS tự biết phục vụ lô nào</div>
                    </div>
                    <div class="bp-step">
                        <div class="bp-step-dot">5</div>
                        <div class="bp-step-desc">
                            Đợt 1: chọn SKU cần nhập → Dielac 2,000 + Grow 1,000 → phiếu mua → duyệt → sinh batch → công nợ đợt 1<br>
                            → Cập nhật <code>lot_item.imported_qty</code> từng dòng
                        </div>
                    </div>
                    <div class="bp-step">
                        <div class="bp-step-dot">6</div>
                        <div class="bp-step-desc">Dielac bán gần hết → hệ thống gợi ý: <em>"Dielac tồn 900/5,000 (18%). Tạo phiếu?"</em></div>
                    </div>
                    <div class="bp-step">
                        <div class="bp-step-dot">7</div>
                        <div class="bp-step-desc">Đợt 2: Dielac 1,500 + Sữa tươi 1,000 → phiếu mua → duyệt → batch → công nợ đợt 2</div>
                    </div>
                    <div class="bp-step">
                        <div class="bp-step-dot">8</div>
                        <div class="bp-step-desc">Lặp lại cho đến khi nhập đủ <strong>từng SKU</strong> hoặc hết thời gian cam kết</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ══════════════ SO SÁNH CŨ vs MỚI ══════════════ -->
    <div class="bp-card">
        <h3><i class='bx bx-transfer'></i> So sánh thiết kế Cũ vs Mới</h3>
        <table class="bp-table">
            <thead><tr><th></th><th>Thiết kế cũ (1 lô = 1 SP)</th><th>Thiết kế mới (1 lô = N SP) ✅</th></tr></thead>
            <tbody>
                <tr>
                    <td><strong>Cấu trúc</strong></td>
                    <td>C2 chứa SL cam kết + imported + remaining trực tiếp</td>
                    <td>C2 chứa tổng value + C2b chứa chi tiết từng SKU</td>
                </tr>
                <tr>
                    <td><strong>Cam kết</strong></td>
                    <td>"Cam kết 10,000 thùng Dielac"</td>
                    <td>"Cam kết: Dielac 5,000 + Grow 3,000 + Sữa tươi 2,000"</td>
                </tr>
                <tr>
                    <td><strong>Reorder</strong></td>
                    <td>Ngưỡng chung cả lô (20% × 10,000)</td>
                    <td>Ngưỡng riêng từng SKU (Dielac 20%, Sữa tươi 25%)</td>
                </tr>
                <tr>
                    <td><strong>Phiếu mua</strong></td>
                    <td>Mỗi đợt nhập 1 SP</td>
                    <td>Mỗi đợt nhập N SP tùy chọn từ lot_item</td>
                </tr>
                <tr>
                    <td><strong>Race condition</strong></td>
                    <td>—</td>
                    <td>An toàn — mỗi lot_item = 1 row riêng, UPDATE atomic</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- ══════════════ FK 1 CHIỀU ══════════════ -->
    <div class="bp-card">
        <h3><i class='bx bx-link'></i> Thiết kế FK: Tránh vòng lặp</h3>

        <div class="bp-grid bp-grid-2">
            <div>
                <div class="bp-highlight bp-highlight-danger">
                    ❌ <strong>SAI — FK vòng:</strong><br>
                    purchase_lot.purchase_policy_id → policy<br>
                    purchase_policy.lot_id → lot<br>
                    → <strong>Vòng lặp!</strong> Không biết tạo cái nào trước.
                </div>
            </div>
            <div>
                <div class="bp-highlight bp-highlight-new">
                    ✅ <strong>ĐÚNG — FK 1 chiều:</strong><br>
                    purchase_policy.lot_id → lot<br>
                    Lot KHÔNG lưu purchase_policy_id<br>
                    → Tạo lot → thêm lot_item (C2b) → gắn CS sau.
                </div>
            </div>
        </div>

        <div class="bp-highlight bp-highlight-info" style="margin-top:12px;">
            📌 <strong>Batch (C5) liên kết lot_item ngầm:</strong> Batch có <code>lot_id</code> + <code>product_sku</code>
            → tìm được đúng dòng lot_item tương ứng mà <strong>không cần FK trực tiếp</strong> đến lot_item_id.<br>
            Ràng buộc: UNIQUE(lot_id, product_sku) trên C2b đảm bảo chỉ có 1 dòng.
        </div>
    </div>

    <!-- ══════════════ THỐNG KÊ THEO CẤP ══════════════ -->
    <div class="bp-card">
        <h3><i class='bx bx-bar-chart-alt-2'></i> Thống kê theo cấp (thêm tầng lot_item)</h3>
        <div style="display:flex;flex-direction:column;gap:8px;font-size:14px;line-height:1.8">
            <div><strong>📊 Sub-batch</strong> → 1 sub cụ thể (VD: HSD 10/2026)</div>
            <div><strong>📊 Batch gốc</strong> → SUM(sub-batches) — 1 đợt nhập</div>
            <div class="bp-highlight bp-highlight-new" style="padding:8px 16px;margin:0;">
                <strong>📊 Dòng SP lô (C2b)</strong> → SUM(batch có lot_id & sku) — 1 SKU trong lô 🆕
            </div>
            <div><strong>📊 Lô mua (C2)</strong> → SUM(tất cả lot_item) — toàn lô cam kết</div>
            <div><strong>📊 Hợp đồng (C1)</strong> → SUM(tất cả lô có contract_id) — toàn HĐ</div>
            <div><strong>📊 NCC (A2)</strong> → SUM(tất cả HĐ có ledger_person_id) — toàn NCC</div>
        </div>
    </div>

    <!-- ══════════════ NAV ══════════════ -->
    <div class="bp-nav">
        <a href="<?php echo tgs_bp_url('bp-luong-mua-hang'); ?>"><i class='bx bx-arrow-back'></i> Luồng 12 Bước</a>
        <a href="<?php echo tgs_bp_url('bp-batch'); ?>">Batch & Sub-batch <i class='bx bx-arrow-to-right'></i></a>
    </div>

</div>
