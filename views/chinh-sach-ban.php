<?php if (!defined('ABSPATH')) exit; ?>

<div class="bp-page">

    <!-- ══════════════ HERO ══════════════ -->
    <div class="bp-hero" style="background:linear-gradient(135deg, #03a5c9 0%, #03c3ec 100%);">
        <div>
            <h2><i class='bx bx-purchase-tag'></i> C8. Chính Sách Bán Ra</h2>
            <p>Auto-apply khi quét SP · Nhân viên không cần nhớ · Áp theo batch, SKU, shop, miền</p>
        </div>
    </div>

    <!-- ══════════════ KHÁI NIỆM ══════════════ -->
    <div class="bp-card">
        <h3><i class='bx bx-bulb'></i> Chính sách bán là gì?</h3>

        <div class="bp-grid bp-grid-2">
            <div>
                <p style="font-size:15px;line-height:1.8">
                    <strong>Chính sách bán</strong> = tập hợp rule giá + KM mà hệ thống <strong>TỰ ĐỘNG áp dụng</strong> khi bán hàng.<br><br>
                    Nhân viên quét SP → hệ thống tìm CS phù hợp → áp giá → nhân viên chỉ thu tiền.<br><br>
                    Cấp trên có thể <strong>ốp CS xuống cấp dưới</strong> (selling_policy_parent_id).
                </p>

                <div class="bp-highlight bp-highlight-info">
                    💡 <strong>Khác CS mua:</strong> Bên MUA → CS là <em>gợi ý</em>, nhân viên sửa được.<br>
                    Bên BÁN → CS <strong>tự động áp</strong>, nhân viên <em>không cần làm gì</em> (auto_apply=1).
                </div>
            </div>
            <div>
                <div class="bp-example">
                    <div class="bp-example-title"><i class='bx bx-purchase-tag'></i> Ví dụ: KM Tết 2026</div>
                    <table class="bp-table">
                        <tr><td>Mã CS</td><td><strong>CSB-TET-2026</strong></td></tr>
                        <tr><td>Tên</td><td>KM Tết 2026 — Mua 2 tặng 1</td></tr>
                        <tr><td>Loại</td><td>2 = tặng SP</td></tr>
                        <tr><td>SKU áp dụng</td><td>["SKU001", "SKU002"]</td></tr>
                        <tr><td>Shop áp dụng</td><td>[1, 5, 10, 15, 20]</td></tr>
                        <tr><td>Auto apply</td><td>✅ Tự động</td></tr>
                        <tr><td>Thời gian</td><td>01/01 → 15/02/2026</td></tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- ══════════════ 5 LOẠI CS BÁN ══════════════ -->
    <div class="bp-card">
        <h3><i class='bx bx-list-ol'></i> 5 loại chính sách bán (selling_policy_type)</h3>

        <table class="bp-table">
            <tr><th>Type</th><th>Tên</th><th>Mô tả</th><th>Ví dụ</th></tr>
            <tr>
                <td><span class="bp-badge bp-badge-primary">1</span></td>
                <td>Giảm giá</td>
                <td>Giá bán cố định hoặc CK %</td>
                <td>SKU001 bán 250,000đ</td>
            </tr>
            <tr>
                <td><span class="bp-badge bp-badge-primary">2</span></td>
                <td>Tặng SP</td>
                <td>Mua X tặng Y</td>
                <td>Mua 3 tặng 1</td>
            </tr>
            <tr>
                <td><span class="bp-badge bp-badge-primary">3</span></td>
                <td>Combo</td>
                <td>Mua set → giá combo</td>
                <td>2 SKU001 + 1 SKU002 = 500k</td>
            </tr>
            <tr>
                <td><span class="bp-badge bp-badge-warning">4</span></td>
                <td>Theo batch</td>
                <td>Áp CS cho batch cụ thể</td>
                <td>Batch #101 (sắp hết HSD) → giảm 20%</td>
            </tr>
            <tr>
                <td><span class="bp-badge bp-badge-info">5</span></td>
                <td>Đặc biệt</td>
                <td>Logic phức tạp trong JSON</td>
                <td>Tùy chỉnh</td>
            </tr>
        </table>
    </div>

    <!-- ══════════════ SELLING RULES JSON ══════════════ -->
    <div class="bp-card">
        <h3><i class='bx bx-code-curly'></i> selling_rules — Ví dụ JSON</h3>

        <div class="bp-tab-group">
            <div class="bp-tabs">
                <div class="bp-tab active" data-tab="fixed">Giá cố định</div>
                <div class="bp-tab" data-tab="buy-get">Mua X tặng Y</div>
                <div class="bp-tab" data-tab="combo">Combo</div>
            </div>

            <div class="bp-tab-content active" data-tab-content="fixed">
                <p>Type = <code>fixed_price</code> — Bán SKU001 giá 250,000đ</p>
                <div class="bp-json">{
  <span class="k">"type"</span>: <span class="s">"fixed_price"</span>,
  <span class="k">"sku"</span>:  <span class="s">"SKU001"</span>,
  <span class="k">"price"</span>: <span class="n">250000</span>
}</div>
            </div>

            <div class="bp-tab-content" data-tab-content="buy-get">
                <p>Type = <code>buy_x_get_y</code> — Mua 3 SKU001 → tặng 1 (giảm 100%)</p>
                <div class="bp-json">{
  <span class="k">"type"</span>: <span class="s">"buy_x_get_y"</span>,
  <span class="k">"buy"</span>:  { <span class="k">"sku"</span>: <span class="s">"SKU001"</span>, <span class="k">"qty"</span>: <span class="n">3</span> },
  <span class="k">"get"</span>:  { <span class="k">"sku"</span>: <span class="s">"SKU001"</span>, <span class="k">"qty"</span>: <span class="n">1</span>, <span class="k">"discount_percent"</span>: <span class="n">100</span> }
}</div>
            </div>

            <div class="bp-tab-content" data-tab-content="combo">
                <p>Type = <code>combo</code> — 2 SKU001 + 1 SKU002 = 500,000đ</p>
                <div class="bp-json">{
  <span class="k">"type"</span>:  <span class="s">"combo"</span>,
  <span class="k">"items"</span>: [
    { <span class="k">"sku"</span>: <span class="s">"SKU001"</span>, <span class="k">"qty"</span>: <span class="n">2</span> },
    { <span class="k">"sku"</span>: <span class="s">"SKU002"</span>, <span class="k">"qty"</span>: <span class="n">1</span> }
  ],
  <span class="k">"combo_price"</span>: <span class="n">500000</span>
}</div>
            </div>
        </div>
    </div>

    <!-- ══════════════ AUTO-APPLY FLOW ══════════════ -->
    <div class="bp-card">
        <h3><i class='bx bx-bot'></i> Luồng auto-apply khi bán hàng</h3>

        <div class="bp-timeline">
            <div class="bp-step">
                <div class="bp-step-dot">1</div>
                <div class="bp-step-title">Nhân viên quét SP</div>
                <div class="bp-step-desc">Quét barcode/SKU + xác định shop (blog_id).</div>
            </div>
            <div class="bp-step">
                <div class="bp-step-dot">2</div>
                <div class="bp-step-title">Hệ thống tìm CS phù hợp</div>
                <div class="bp-step-desc">
                    Điều kiện: <code>product_skus</code> chứa SKU · <code>apply_to_blog_ids</code> chứa blog_id ·
                    <code>status=1</code> · <code>start_date ≤ now ≤ end_date</code> · <code>auto_apply=1</code>
                </div>
            </div>
            <div class="bp-step">
                <div class="bp-step-dot">3</div>
                <div class="bp-step-title">Sắp xếp theo priority</div>
                <div class="bp-step-desc"><code>selling_policy_priority ASC</code> — số nhỏ = ưu tiên cao.</div>
            </div>
            <div class="bp-step">
                <div class="bp-step-dot">4</div>
                <div class="bp-step-title">Áp từng rule</div>
                <div class="bp-step-desc">Parse <code>selling_rules</code> JSON → áp fixed_price, buy_x_get_y, combo...</div>
            </div>
            <div class="bp-step">
                <div class="bp-step-dot">5</div>
                <div class="bp-step-title">Hiển thị giá cuối cùng</div>
                <div class="bp-step-desc">Nhân viên thấy giá + KM → chỉ thu tiền. <strong>Không cần nhớ bất kỳ CS nào!</strong></div>
            </div>
        </div>
    </div>

    <!-- ══════════════ ÁP DỤNG THEO PHẠM VI ══════════════ -->
    <div class="bp-card">
        <h3><i class='bx bx-target-lock'></i> Phạm vi áp dụng</h3>

        <div class="bp-grid bp-grid-2">
            <div>
                <h4>Theo shop</h4>
                <div class="bp-json"><span class="k">"apply_to_blog_ids"</span>: [<span class="n">1</span>, <span class="n">5</span>, <span class="n">10</span>, <span class="n">15</span>, <span class="n">20</span>]</div>
                <p class="bp-text-muted">Chỉ 5 shop này được áp CS.</p>
            </div>
            <div>
                <h4>Theo tổ chức</h4>
                <div class="bp-json"><span class="k">"apply_to_org_level"</span>: {
  <span class="k">"level"</span>: <span class="s">"region"</span>,
  <span class="k">"name"</span>:  <span class="s">"mien_bac"</span>
}</div>
                <p class="bp-text-muted">Tất cả shop miền Bắc.</p>
            </div>
            <div>
                <h4>Theo batch cụ thể</h4>
                <div class="bp-json"><span class="k">"apply_to_batch_ids"</span>: [<span class="n">101</span>, <span class="n">102</span>]</div>
                <p class="bp-text-muted">Chỉ batch #101, #102 (VD: sắp hết HSD → giảm giá).</p>
            </div>
            <div>
                <h4>Kế thừa cấp trên</h4>
                <div class="bp-json"><span class="k">"selling_policy_parent_id"</span>: <span class="n">10</span></div>
                <p class="bp-text-muted">CS cấp công ty → ốp xuống miền → chi nhánh → shop.</p>
            </div>
        </div>
    </div>

    <!-- ══════════════ GHI CHÚ SELLING_POLICY_ITEMS ══════════════ -->
    <div class="bp-card">
        <h3><i class='bx bx-info-circle'></i> Tại sao dùng JSON thay vì bảng riêng?</h3>

        <div class="bp-grid bp-grid-2">
            <div>
                <div class="bp-highlight bp-highlight-info">
                    <strong>Bên MUA</strong> (C3-C4): Tách 2 bảng<br>
                    → Vì: 8 loại rule phức tạp, cần query từng dòng, CK bậc thang, combo, tích lũy...
                </div>
            </div>
            <div>
                <div class="bp-highlight bp-highlight-new">
                    <strong>Bên BÁN</strong> (C8): JSON <code>selling_rules</code><br>
                    → Vì: đơn giản hơn, ít rule, JSON đủ linh hoạt.<br>
                    → Nếu sau này &gt;20 rule/policy → tách ra bảng <code>selling_policy_item</code> riêng.
                </div>
            </div>
        </div>
    </div>

    <!-- ══════════════ VÍ DỤ KỊCH BẢN ══════════════ -->
    <div class="bp-card">
        <h3><i class='bx bx-movie-play'></i> Kịch bản: Bán Dielac tại shop #5</h3>

        <div class="bp-example">
            <div class="bp-example-title"><i class='bx bx-user'></i> Nhân viên quét SKU001 (Dielac Alpha)</div>

            <div class="bp-flow" style="margin:16px 0;">
                <div class="bp-flow-box" style="border-color:var(--bp-primary)">
                    Quét SKU001<small>shop #5</small>
                </div>
                <span class="bp-flow-arrow">→</span>
                <div class="bp-flow-box" style="border-color:var(--bp-policy)">
                    Tìm CS<small>2 CS phù hợp</small>
                </div>
                <span class="bp-flow-arrow">→</span>
                <div class="bp-flow-box" style="border-color:var(--bp-lot)">
                    Áp CS #1<small>Giá 250k</small>
                </div>
                <span class="bp-flow-arrow">→</span>
                <div class="bp-flow-box" style="border-color:var(--bp-lot)">
                    Áp CS #2<small>Mua 3 tặng 1</small>
                </div>
                <span class="bp-flow-arrow">→</span>
                <div class="bp-flow-box" style="border-color:var(--bp-batch);background:#fff5f3">
                    FIFO<small>Trừ batch lá</small>
                </div>
            </div>

            <table class="bp-table">
                <tr><th>Bước</th><th>Chi tiết</th></tr>
                <tr><td>1. Tìm CS</td><td>CSB-GIA-2026 (priority=1, giá cố định 250k) + CSB-TET-2026 (priority=2, mua 3 tặng 1)</td></tr>
                <tr><td>2. Áp giá</td><td>SKU001 → 250,000đ (thay vì giá gốc 280,000đ)</td></tr>
                <tr><td>3. Áp KM</td><td>Mua 3 → tặng 1 → khách trả 3 × 250k = 750,000đ, nhận 4 SP</td></tr>
                <tr><td>4. FIFO</td><td>Trừ 4 SP từ sub-batch #101 (HSD sớm nhất)</td></tr>
                <tr><td>5. Ghi nhận</td><td>ledger_item.batch_cost_breakdown + batch.sold += 4</td></tr>
            </table>
        </div>
    </div>

    <!-- ══════════════ NAV ══════════════ -->
    <div class="bp-nav">
        <a href="<?php echo tgs_bp_url('bp-cong-no'); ?>"><i class='bx bx-arrow-back'></i> Công Nợ & FIFO</a>
        <a href="<?php echo tgs_bp_url('bp-bang-du-lieu'); ?>">Từ Điển Dữ Liệu <i class='bx bx-arrow-to-right'></i></a>
    </div>

</div>
