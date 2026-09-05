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
      <div class="nav-item"><button class="nav-trigger">Platform</button><div class="nav-menu"><a href="/crm.php">Lead Management</a><a href="/channels.php">Unified Inbox</a><a href="/features.php">Platform Features</a><a href="/ai/workflow-builder/">Agentic Workflow Builder</a><a href="/pricing.php">Plans &amp; Pricing</a></div></div>
      <div class="nav-item"><button class="nav-trigger">AI Agents</button><div class="nav-menu"><a href="/ai-platform.php">AI Agent Platform</a><a href="/ai/command-center/">AI Command Center</a><a href="/ai/sales-copilot/">AI Sales Copilot</a><a href="/ai/multi-agent/">Multi-Agent Orchestration</a><a href="/ai/voice/">AI Voice Platform</a><a href="/ai/support/">AI Support Platform</a><a href="/ai/knowledge-base/">AI Knowledge Base</a><a href="/ai/memory/">AI Memory</a><a href="/ai/lead-routing/">AI Lead Routing</a><a href="/ai/data-agent/">AI Data Quality Agent</a><a href="/ai/meeting-agent/">AI Meeting Agent</a><a href="/ai/email-intelligence/">AI Email Intelligence</a><a href="/ai/governance/">AI Governance</a><a href="/ai/evaluation/">AI Performance &amp; Evaluation</a><a href="/ai-agents/lead-capture/">Lead Capture Agent</a><a href="/ai-agents/qualification/">Qualification Agent</a><a href="/ai-agents/whatsapp/">WhatsApp Agent</a><a href="/ai-agents/voice/">Voice Agent</a><a href="/ai-agents/follow-up/">Follow-Up Agent</a><a href="/ai-agents/appointment/">Appointment Agent</a><a href="/ai-agents/lead-scoring/">Lead Scoring Agent</a><a href="/ai-agents/sales-assistant/">Sales Assistant</a><a href="/ai-agents/support/">Support Agent</a><a href="/ai-agents/nurturing/">Nurturing Agent</a><a href="/ai-agents/reactivation/">Reactivation Agent</a><a href="/ai-agents/campaign/">Campaign Agent</a><a href="/ai-agents/human-handoff/">Human Handoff</a></div></div>
      <div class="nav-item"><button class="nav-trigger">Channels</button><div class="nav-menu"><a href="/channels/whatsapp/">WhatsApp</a><a href="/channels/meta-instagram/">Meta &amp; Instagram</a><a href="/channels/google/">Google &amp; Ads</a><a href="/channels/voice/">Voice</a><a href="/channels/website/">Website &amp; Forms</a><a href="/channels/email/">Email &amp; SMS</a><a href="/channels/messenger/">Messenger</a><a href="/channels/instagram/">Instagram</a><a href="/channels/sms/">SMS</a><a href="/channels/telegram/">Telegram</a></div></div>
      <div class="nav-item"><button class="nav-trigger">Solutions</button><div class="nav-menu"><a href="/solutions.php">All Industries</a><a href="/industry/real-estate/">Real Estate</a><a href="/industry/education/">Education</a><a href="/industry/healthcare/">Healthcare</a><a href="/industry/automotive/">Automotive</a><a href="/industry/financial-services/">Financial Services</a><a href="/industry/travel-hospitality/">Travel &amp; Hospitality</a><a href="/industry/retail-consumer/">Retail &amp; Consumer</a><a href="/industry/saas-professional-services/">SaaS &amp; Professional Services</a></div></div>
      <a class="<?= $active==='pricing'?'active':''?>" href="/pricing.php">Pricing</a>
      <a class="<?= $active==='docs'?'active':''?>" href="/docs/">Resources</a>
    </nav>
    <div class="nav-actions"><a class="login-link" href="/login.php">Login</a><a class="btn btn-primary btn-sm" href="/contact.php">Book a Demo</a><button class="menu-toggle" aria-label="Toggle navigation" aria-expanded="false">☰</button></div>
  </div>
</header>
<main>
