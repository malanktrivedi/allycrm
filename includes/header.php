<?php
$pageTitle=$pageTitle??'Ally CRM'; $active=$active??'';
?>
<!doctype html><html lang="en"><head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="description" content="Ally CRM — one AI platform for every lead, every channel and every conversation.">
<title><?=htmlspecialchars($pageTitle)?></title>
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/style.css"></head><body>
<header class="site-header"><div class="container nav-wrap">
<a class="brand" href="/"><span class="brand-mark">A</span><span>ally<span class="brand-crm">CRM</span></span></a>
<button class="menu-toggle" aria-label="Toggle navigation" aria-expanded="false">☰</button>
<nav class="main-nav">
<a class="<?= $active==='platform'?'active':''?>" href="/">Platform</a>
<a class="<?= $active==='channels'?'active':''?>" href="/channels.php">Channels</a>
<a class="<?= $active==='ai'?'active':''?>" href="/ai-platform.php">AI Agents</a>
<a class="<?= $active==='crm'?'active':''?>" href="/crm.php">CRM</a>
<a class="<?= $active==='solutions'?'active':''?>" href="/solutions.php">Solutions</a>
<a class="<?= $active==='pricing'?'active':''?>" href="/pricing.php">Pricing</a>
<a class="<?= $active==='docs'?'active':''?>" href="/docs/">Docs</a>
</nav>
<div class="nav-actions"><a class="login-link" href="/login.php">Login</a><a class="btn btn-primary btn-sm" href="/contact.php">Contact Sales</a></div>
</div></header><main>