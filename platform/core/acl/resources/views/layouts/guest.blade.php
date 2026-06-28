<x-core::layouts.base :body-attributes="['data-bs-theme' => 'dark']">
<style>
body { background:#0a0a0a !important; }

.nuba-wrap { display:flex; min-height:100vh; width:100%; }

.nuba-left {
    width:440px; min-width:360px;
    background:#111;
    display:flex; flex-direction:column;
    justify-content:center; align-items:center;
    padding:50px 44px;
    position:relative; z-index:2;
    border-right:1px solid #1e1e1e;
}
.nuba-left::before {
    content:""; position:absolute;
    top:0; left:0; right:0; height:4px;
    background:linear-gradient(90deg,#FFD700,#B8860B,#FFD700);
}
.nuba-logo-area { text-align:center; margin-bottom:36px; }
.nuba-logo-area img { height:64px; width:auto; object-fit:contain; }
.nuba-logo-area .brand-name {
    display:block; margin-top:10px;
    font-size:26px; font-weight:900; letter-spacing:3px;
    color:#FFD700; text-transform:uppercase;
}
.nuba-logo-area .brand-tag {
    display:block; font-size:11px; color:#666;
    letter-spacing:2px; margin-top:3px; text-transform:uppercase;
}
.nuba-left h2 { font-size:20px; font-weight:700; color:#fff; text-align:center; margin-bottom:4px; }
.nuba-left .sub { font-size:13px; color:#666; text-align:center; margin-bottom:28px; }

.nuba-left .form-control,
.nuba-left input[type=email],
.nuba-left input[type=password],
.nuba-left input[type=text] {
    background:#1c1c1c !important; border:1px solid #2e2e2e !important;
    color:#fff !important; border-radius:8px !important;
    padding:13px 16px !important; font-size:14px !important;
}
.nuba-left .form-control:focus, .nuba-left input:focus {
    border-color:#FFD700 !important;
    box-shadow:0 0 0 3px rgba(255,215,0,.15) !important;
}
.nuba-left .form-label, .nuba-left label {
    color:#888 !important; font-size:11px !important;
    font-weight:700 !important; letter-spacing:1px !important;
    text-transform:uppercase !important;
}
.nuba-left .btn-primary, .nuba-left button[type=submit] {
    background:linear-gradient(135deg,#FFD700,#B8860B) !important;
    border:none !important; color:#000 !important;
    font-weight:800 !important; font-size:13px !important;
    letter-spacing:1.5px !important; text-transform:uppercase !important;
    padding:13px !important; border-radius:8px !important;
    width:100% !important; cursor:pointer !important;
}
.nuba-left .btn-primary:hover { opacity:.9 !important; }
.nuba-left a { color:#FFD700 !important; font-size:13px; }
.nuba-footer { margin-top:32px; text-align:center; color:#333; font-size:11px; }

.nuba-right {
    flex:1; background:#0a0a0a;
    display:flex; flex-direction:column;
    justify-content:center; align-items:center;
    position:relative; overflow:hidden;
}
.nuba-grid {
    position:absolute; inset:0;
    background-image:
        linear-gradient(rgba(255,215,0,.04) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,215,0,.04) 1px, transparent 1px);
    background-size:64px 64px;
}
.nuba-glow {
    position:absolute; width:600px; height:600px;
    border-radius:50%;
    background:radial-gradient(circle, rgba(255,215,0,.07) 0%, transparent 70%);
    top:50%; left:50%; transform:translate(-50%,-50%);
}
.nuba-right-inner { position:relative; z-index:1; text-align:center; padding:40px; }
.nuba-big {
    font-size:72px; font-weight:900; letter-spacing:6px;
    background:linear-gradient(135deg,#FFD700 0%,#B8860B 40%,#FFD700 80%);
    -webkit-background-clip:text; -webkit-text-fill-color:transparent;
    background-clip:text; line-height:1; text-transform:uppercase;
    margin-bottom:16px;
}
.nuba-sub2 { font-size:13px; color:#444; letter-spacing:5px; text-transform:uppercase; margin-bottom:48px; }
.nuba-stats { display:flex; gap:56px; justify-content:center; }
.nuba-stat .num { font-size:34px; font-weight:800; color:#FFD700; line-height:1; }
.nuba-stat .lbl { font-size:10px; color:#444; letter-spacing:3px; text-transform:uppercase; margin-top:4px; }
.nuba-badge {
    margin-top:60px; display:inline-flex; align-items:center; gap:10px;
    border:1px solid #1e1e1e; border-radius:100px;
    padding:10px 24px; background:rgba(255,215,0,.04);
}
.nuba-badge span { font-size:11px; color:#555; letter-spacing:2px; text-transform:uppercase; }
.nuba-dot { width:7px; height:7px; border-radius:50%; background:#FFD700; box-shadow:0 0 8px #FFD700; animation:pulse 2s infinite; }
@keyframes pulse { 0%,100%{opacity:1} 50%{opacity:.4} }

@media(max-width:900px) { .nuba-right{display:none;} .nuba-left{width:100%;min-width:unset;} }
</style>

<div class="nuba-wrap">
    <div class="nuba-left">
        <div class="nuba-logo-area">
            <img src="{{ url('storage/nubanews-logo.jpg') }}" alt="NubaNews" onerror="this.style.display='none'">
            <span class="brand-name">NubaNews</span>
            <span class="brand-tag">News &amp; Magazine Platform</span>
        </div>
        <h2>Welcome Back</h2>
        <p class="sub">Sign in to manage your newsroom</p>

        @yield('content')

        <div class="nuba-footer">
            &copy; 2026 NubaNews &bull; trackd.live &bull; mawuliorukpe@gmail.com
        </div>
    </div>

    <div class="nuba-right">
        <div class="nuba-grid"></div>
        <div class="nuba-glow"></div>
        <div class="nuba-right-inner">
            <div class="nuba-big">NubaNews</div>
            <div class="nuba-sub2">Your Trusted News Source</div>
            <div class="nuba-stats">
                <div class="nuba-stat"><div class="num">24/7</div><div class="lbl">Live Coverage</div></div>
                <div class="nuba-stat"><div class="num">100%</div><div class="lbl">Verified</div></div>
                <div class="nuba-stat"><div class="num">1000+</div><div class="lbl">Stories</div></div>
            </div>
            <div class="nuba-badge">
                <div class="nuba-dot"></div>
                <span>Admin Panel — Powered by Botble CMS 7.6.3</span>
            </div>
        </div>
    </div>
</div>
</x-core::layouts.base>
