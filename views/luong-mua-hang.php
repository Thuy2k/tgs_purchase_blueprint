<?php if (!defined('ABSPATH')) exit; ?>

<div class="bp-page">

    <!-- ══════════════ HERO ══════════════ -->
    <div class="bp-hero">
        <div>
            <h2><i class='bx bx-git-merge'></i> Luồng Mua Hàng — 12 Bước</h2>
            <p>Từ ký hợp đồng NCC → nhập kho → bán hàng → auto-reorder → dashboard kế toán</p>
        </div>
        <div class="bp-hero-right">
            <span class="bp-badge bp-badge-new" style="font-size:13px;padding:5px 12px;">🆕 = bước mới/thay đổi 24/02</span>
        </div>
    </div>

    <!-- ══════════════ VÍ DỤ XUYÊN SUỐT ══════════════ -->
    <div class="bp-highlight bp-highlight-info">
        <strong>📖 Ví dụ xuyên suốt:</strong> NCC <strong>Vinamilk</strong> — Hợp đồng <strong>HD-VNM-2026-001</strong> —
        Lô mua <strong>VNM-LOT-2026-Q1</strong> (3 SP: Dielac 5,000 + Grow 3,000 + Sữa tươi 2,000) —
        Chính sách <strong>CS-VNM-202602</strong> — Nhập nhiều đợt.
    </div>

    <!-- ══════════════ TIMELINE ══════════════ -->
    <div class="bp-card">
        <div class="bp-timeline">

            <!-- Bước 1 -->
            <div class="bp-step">
                <div class="bp-step-dot">1</div>
                <div class="bp-step-title">Ký hợp đồng NCC <span class="bp-tag">tùy chọn</span></div>
                <div class="bp-step-desc">
                    Tạo bản ghi <code>supplier_contract</code> (C1). Khung pháp lý: phương thức TT, trả chậm, ngân hàng.<br>
                    <strong>VD:</strong> HD-VNM-2026-001 — Vinamilk — TT chuyển khoản, trả chậm 30 ngày.
                </div>
                <div class="bp-step-tables">
                    <span class="bp-badge bp-badge-info">C1 supplier_contract</span>
                </div>
            </div>

            <!-- Bước 2 -->
            <div class="bp-step">
                <div class="bp-step-dot new">2</div>
                <div class="bp-step-title">Tạo lô mua NCC <span class="bp-badge bp-badge-new">MỚI</span> <span class="bp-tag">tùy chọn</span></div>
                <div class="bp-step-desc">
                    Tạo <code>purchase_lot</code> (C2): "Lô mua Vinamilk Q1/2026".<br>
                    Thêm <strong>N dòng lot_item</strong> (C2b): Dielac 5,000 + Grow 3,000 + Sữa tươi 2,000.<br>
                    Gắn vào hợp đồng (nếu có). Thiết lập auto_reorder, ngưỡng nhắc từng SKU.<br>
                    <strong>VD:</strong> VNM-LOT-2026-Q1 · 3 SP · ~1.55 tỷ · reorder per-SKU · status: active
                </div>
                <div class="bp-step-tables">
                    <span class="bp-badge bp-badge-lot">C2 purchase_lot 🆕</span>
                    <span class="bp-badge bp-badge-lot">C2b lot_item 🆕</span>
                </div>
            </div>

            <!-- Bước 3 -->
            <div class="bp-step">
                <div class="bp-step-dot">3</div>
                <div class="bp-step-title">Tạo chính sách mua <span class="bp-tag">tùy chọn</span></div>
                <div class="bp-step-desc">
                    Tạo <code>purchase_policy</code> (C3) + N dòng <code>purchase_policy_item</code> (C4).<br>
                    Gắn vào lô (<code>lot_id</code>) hoặc dùng độc lập. Có thể clone từ template cũ.<br>
                    <strong>VD:</strong> CS-VNM-202602 · lot_id = VNM-LOT-2026-Q1<br>
                    → Dòng 1 (type=1): Dielac giá 180,000đ<br>
                    → Dòng 2 (type=2): Mua ≥100 → CK 5%<br>
                    → Dòng 3 (type=4): Mua 100 → tặng 10<br>
                    → Dòng 4 (type=6): TT trong 15 ngày → CK thêm 2%
                </div>
                <div class="bp-step-tables">
                    <span class="bp-badge bp-badge-warning">C3 purchase_policy</span>
                    <span class="bp-badge bp-badge-warning">C4 purchase_policy_item</span>
                </div>
            </div>

            <!-- Bước 4 -->
            <div class="bp-step">
                <div class="bp-step-dot">4</div>
                <div class="bp-step-title">Tạo phiếu mua hàng (ĐỢT 1)</div>
                <div class="bp-step-desc">
                    <code>local_ledger</code> type=9 (A3). Chọn lô → hiện danh sách <strong>lot_item (C2b)</strong> → chọn SKU cần nhập đợt này.<br>
                    Hệ thống auto fill giá, CK, tặng từ lot_item + CS.<br>
                    Nhân viên <strong>sửa trên phiếu thoải mái</strong> — CS chỉ là gợi ý!<br>
                    <strong>VD:</strong> PM-2026-0213-001 · lot_id = VNM-LOT-Q1 · Dielac 2,000 + Grow 1,000
                </div>
                <div class="bp-step-tables">
                    <span class="bp-badge bp-badge-primary">A3 local_ledger (type=9)</span>
                </div>
            </div>

            <!-- Bước 5 -->
            <div class="bp-step">
                <div class="bp-step-dot new">5</div>
                <div class="bp-step-title">Duyệt phiếu → Sinh BATCH <span class="bp-badge bp-badge-new">THAY ĐỔI</span></div>
                <div class="bp-step-desc">
                    Mỗi SKU = 1 batch gốc (level=0). Hệ thống <strong>GỢI Ý chia sub-batch</strong>:<br>
                    <em>"SP này có 3 HSD khác nhau, chia 3 sub-batch?"</em><br>
                    → Người mua: <strong>chấp nhận</strong> / tự chia / bỏ qua.<br>
                    Tạo <code>supplier_payment</code> (C7) — công nợ đợt này.<br>
                    Cập nhật lot_item (C2b): <code>imported_qty += SL</code> theo từng SKU
                </div>
                <div class="bp-step-tables">
                    <span class="bp-badge bp-badge-danger">C5 batch ⭐</span>
                    <span class="bp-badge bp-badge-batch">Sub-batch 🆕</span>
                    <span class="bp-badge bp-badge-info">C7 supplier_payment</span>
                </div>
            </div>

            <!-- Bước 6 -->
            <div class="bp-step">
                <div class="bp-step-dot">6</div>
                <div class="bp-step-title">Nhập kho</div>
                <div class="bp-step-desc">
                    <code>local_ledger</code> type=1 (A3).<br>
                    SP tracking HSD → sinh lot (B2) + gắn <code>lot.batch_id</code> (batch lá).<br>
                    SP không tracking → cộng <code>quantity_no_tracking</code> + gắn <code>item.batch_id</code>.
                </div>
                <div class="bp-step-tables">
                    <span class="bp-badge bp-badge-primary">A3 local_ledger (type=1)</span>
                    <span class="bp-badge bp-badge-info">B2 product_lots</span>
                </div>
            </div>

            <!-- Bước 7 -->
            <div class="bp-step">
                <div class="bp-step-dot new">7</div>
                <div class="bp-step-title">Gợi ý nhập tiếp từ NCC <span class="bp-badge bp-badge-new">MỚI</span></div>
                <div class="bp-step-desc">
                    Chỉ khi <code>lot.auto_reorder_enabled = 1</code>. Kiểm tra <strong>TỪNG lot_item (C2b)</strong>:<br>
                    <strong>Trigger:</strong> SUM(batch_lá.remaining WHERE lot_id=X AND sku=S) ≤ threshold% × lot_item.committed_qty<br>
                    <strong>VD Dielac:</strong> committed=5,000 · remaining=900 → 18% &lt; 20% → <strong>NHẮC!</strong><br>
                    <em>"Dielac (SKU-DL01): tồn 900/5,000 (18%). Chưa nhập: 1,500. Tạo phiếu mua?"</em><br>
                    <br>
                    Khi đạt mốc tích lũy (policy_item type=7):<br>
                    <em>"Dielac: đã nhập 4,500/5,000 — đạt CK bậc 3 (8%). Gợi ý đòi quyền lợi NCC."</em>
                </div>
                <div class="bp-step-tables">
                    <span class="bp-badge bp-badge-lot">C2 purchase_lot</span>
                    <span class="bp-badge bp-badge-lot">C2b lot_item</span>
                    <span class="bp-badge bp-badge-warning">C4 policy_item (type=7)</span>
                </div>
            </div>

            <!-- Bước 7b — AUTO-REORDER SHOP (v9c) -->
            <div class="bp-step">
                <div class="bp-step-dot new">7b</div>
                <div class="bp-step-title">Auto-Reorder: Đề xuất mua/chuyển kho <span class="bp-badge bp-badge-new">MỚI v9c</span></div>
                <div class="bp-step-desc">
                    Admin cấu hình <strong>MIN/MAX tồn kho</strong> per shop per SKU (C2c).<br>
                    Bấm <strong>"Quét đề xuất"</strong> → hệ thống tính stock từ <code>batch_distribution</code> (leaf batches):<br>
                    <code>stock = qty − sold − damaged − transferred_out</code><br><br>
                    <strong>Nếu stock &lt; min_qty:</strong><br>
                    → Tìm shop thừa (stock &gt; max_qty) → <em>Chuyển kho</em> (action=2)<br>
                    → Không shop thừa → <em>Mua thêm từ NCC</em> (action=1)<br><br>
                    Sinh đề xuất vào <strong>C9 reorder_suggestion</strong> → Admin duyệt → Tạo phiếu.<br>
                    <strong>VD:</strong> Shop #5 SKU001 stock=3, min=10 → deficit=7 → Shop #8 surplus=15 → <em>"Chuyển 7 từ #8 → #5"</em>
                </div>
                <div class="bp-step-tables">
                    <span class="bp-badge bp-badge-lot">C2c shop_config 🆕</span>
                    <span class="bp-badge bp-badge-lot">C9 reorder_suggestion 🆕</span>
                    <span class="bp-badge bp-badge-danger">C5 batch (distribution)</span>
                </div>
            </div>

            <!-- Bước 8 -->
            <div class="bp-step">
                <div class="bp-step-dot">8</div>
                <div class="bp-step-title">Điều chuyển xuống shop</div>
                <div class="bp-step-desc">
                    <code>transfer_ledger</code> (A5) + <code>batch_movement</code> (C6) — batch lá.<br>
                    <code>batch.batch_distribution</code> JSON cập nhật: [{"blog_id":5,"qty":100,"sold":30}]
                </div>
                <div class="bp-step-tables">
                    <span class="bp-badge bp-badge-primary">A5 transfer_ledger</span>
                    <span class="bp-badge bp-badge-info">C6 batch_movement</span>
                </div>
            </div>

            <!-- Bước 9 -->
            <div class="bp-step">
                <div class="bp-step-dot">9</div>
                <div class="bp-step-title">Set chính sách bán</div>
                <div class="bp-step-desc">
                    <code>selling_policy</code> (C8) — auto_apply = 1. Áp theo batch, SKU, shop, miền.<br>
                    Nhân viên quét SP → hệ thống tự áp giá + KM → chỉ cần thu tiền.
                </div>
                <div class="bp-step-tables">
                    <span class="bp-badge bp-badge-warning">C8 selling_policy</span>
                </div>
            </div>

            <!-- Bước 10 -->
            <div class="bp-step">
                <div class="bp-step-dot">10</div>
                <div class="bp-step-title">Bán hàng</div>
                <div class="bp-step-desc">
                    SP tracking → quét lot → biết batch lá → áp giá từ selling_policy.<br>
                    SP không tracking → <strong>FIFO tự trừ batch lá cũ nhất</strong>.<br>
                    Cập nhật: <code>batch.batch_sold_quantity</code> (+ batch cha nếu có) + WAC.
                </div>
                <div class="bp-step-tables">
                    <span class="bp-badge bp-badge-danger">C5 batch (FIFO)</span>
                    <span class="bp-badge bp-badge-primary">A4 ledger_item</span>
                </div>
            </div>

            <!-- Bước 11 -->
            <div class="bp-step">
                <div class="bp-step-dot">11</div>
                <div class="bp-step-title">Dashboard kế toán</div>
                <div class="bp-step-desc">
                    Query từ batch data:<br>
                    • Tồn kho / lãi lỗ: sub-batch → batch gốc → dòng SP lô → lô → HĐ → NCC<br>
                    • Vòng quay tồn kho, WAC, biên lợi nhuận, tốc độ bán/ngày<br>
                    • Công nợ NCC (theo đợt / lô / HĐ)<br>
                    • Tiến độ nhập lô: theo từng SKU (lot_item) + tổng lô<br>
                    • Gợi ý quyền lợi NCC (theo từng SKU)
                </div>
                <div class="bp-step-tables">
                    <span class="bp-badge bp-badge-primary">ALL TABLES</span>
                </div>
            </div>

        </div><!-- /timeline -->
    </div>

    <!-- ══════════════ TÓM TẮT FLOW ══════════════ -->
    <div class="bp-card">
        <h3><i class='bx bx-transfer'></i> Tóm tắt luồng dữ liệu</h3>
        <div class="bp-flow" style="justify-content:center;">
            <div class="bp-flow-box" style="border-color:var(--bp-contract)">HĐ<small>C1</small></div>
            <span class="bp-flow-arrow">→</span>
            <div class="bp-flow-box" style="border-color:var(--bp-lot)">Lô 🆕<small>C2</small></div>
            <span class="bp-flow-arrow">→</span>
            <div class="bp-flow-box" style="border-color:var(--bp-lot)">N SP 🆕<small>C2b</small></div>
            <span class="bp-flow-arrow">→</span>
            <div class="bp-flow-box" style="border-color:var(--bp-policy)">CS mua<small>C3+C4</small></div>
            <span class="bp-flow-arrow">→</span>
            <div class="bp-flow-box" style="border-color:var(--bp-primary)">Phiếu<small>A3</small></div>
            <span class="bp-flow-arrow">→</span>
            <div class="bp-flow-box" style="border-color:var(--bp-batch);background:#fff5f3">Batch ⭐<small>C5</small></div>
            <span class="bp-flow-arrow">→</span>
            <div class="bp-flow-box" style="border-color:var(--bp-payment)">Công nợ<small>C7</small></div>
        </div>
        <div class="bp-flow" style="justify-content:center;margin-top:8px;">
            <div class="bp-flow-box" style="border-color:var(--bp-batch)">Batch ⭐<small>C5</small></div>
            <span class="bp-flow-arrow">→</span>
            <div class="bp-flow-box" style="border-color:var(--bp-contract)">Rải shop<small>C6</small></div>
            <span class="bp-flow-arrow">→</span>
            <div class="bp-flow-box" style="border-color:var(--bp-policy)">CS bán<small>C8</small></div>
            <span class="bp-flow-arrow">→</span>
            <div class="bp-flow-box" style="border-color:var(--bp-lot)">Bán hàng<small>FIFO</small></div>
            <span class="bp-flow-arrow">→</span>
            <div class="bp-flow-box" style="border-color:var(--bp-primary)">📊 KT<small>Dashboard</small></div>
        </div>
        <div class="bp-flow" style="justify-content:center;margin-top:8px;">
            <div class="bp-flow-box" style="border-color:var(--bp-lot);background:#f0fff0">MIN/MAX shop 🆕<small>C2c</small></div>
            <span class="bp-flow-arrow">→ quét →</span>
            <div class="bp-flow-box" style="border-color:var(--bp-lot);background:#f0fff0">Đề xuất 🆕<small>C9</small></div>
            <span class="bp-flow-arrow">→ duyệt →</span>
            <div class="bp-flow-box" style="border-color:var(--bp-primary)">Phiếu mua/chuyển<small>A3</small></div>
        </div>
    </div>

    <!-- ══════════════ NAV ══════════════ -->
    <div class="bp-nav">
        <a href="<?php echo tgs_bp_url('bp-tong-quan'); ?>"><i class='bx bx-arrow-back'></i> Tổng Quan</a>
        <a href="<?php echo tgs_bp_url('bp-lo-mua-ncc'); ?>">Lô Mua NCC <i class='bx bx-arrow-to-right'></i></a>
    </div>

</div>
