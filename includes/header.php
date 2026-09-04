<?php
$pageTitle=$pageTitle??'Ally CRM';
$active=$active??'platform';
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="description" content="Ally CRM — unified omnichannel AI lead management and agentic automation.">
<title><?=htmlspecialchars($pageTitle)?></title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/style.css">
<link rel="stylesheet" href="/assets/css/compat.css">
</head>
<body>
<header class="site-header">
  <div class="container nav-wrap">
    <a class="brand" href="/"><span class="brand-mark">A</span><span>ally<span class="brand-crm">CRM</span></span></a>
    <nav class="main-nav" aria-label="Primary navigation">
      <div class="nav-item"><button class="nav-trigger">Platform</button><div class="nav-menu"><a href="/crm.php">Lead Management</a><a href="/channels.php">Unified Inbox</a><a href="/ai-platform.php">AI Agents</a><a href="/features.php">Automation</a><a href="/features.php#analytics">Analytics</a></div></div>
      <div class="nav-item"><button class="nav-trigger">AI Agents</button><div class="nav-menu"><a href="/ai-platform.php">AI Agent Platform</a><a href="/ai-platform.php#qualification">Qualification Agent</a><a href="/ai-platform.php#whatsapp">WhatsApp Agent</a><a href="/ai-platform.php#voice">Voice Agent</a><a href="/ai-platform.php#followup">Follow-Up Agent</a></div></div>
      <div class="nav-item"><button class="nav-trigger">Channels</button><div class="nav-menu"><a href="/channels.php">WhatsApp</a><a href="/channels.php">Meta &amp; Instagram</a><a href="/channels.php">Google &amp; Ads</a><a href="/channels.php">Voice</a><a href="/channels.php">Website, Email &amp; SMS</a></div></div>
      <div class="nav-item"><button class="nav-trigger">Solutions</button><div class="nav-menu"><a href="/solutions.php">All Industries</a><a href="/industry/real-estate/">Real Estate</a><a href="/solutions.php">Education</a><a href="/solutions.php">Automotive</a><a href="/solutions.php">Healthcare</a><a href="/solutions.php">SaaS &amp; Professional Services</a></div></div>
      <a class="<?= $active==='pricing'?'active':''?>" href="/pricing.php">Pricing</a>
      <a class="<?= $active==='docs'?'active':''?>" href="/docs/">Resources</a>
    </nav>
    <div class="nav-actions"><a class="login-link" href="/login.php">Login</a><a class="btn btn-primary btn-sm" href="/contact.php">Book a Demo</a><button class="menu-toggle" aria-label="Toggle navigation" aria-expanded="false">☰</button></div>
  </div>
</header>
<main>
