<?php $pageTitle='Ally CRM API Documentation'; $active='api'; include __DIR__.'/../includes/header.php'; ?><section class="hero"><div class="container"><span class="eyebrow">Developer Reference</span><h1>Ally CRM API.</h1><p class="hero-copy">Developer-friendly documentation for authentication, CRM resources, webhooks, errors, limits and integration patterns.</p></div></section><section class="section"><div class="container docs-layout"><aside class="docs-sidebar"><h4>Guides</h4><a href="#quickstart">Quick Start</a><a href="#auth">Authentication</a><a href="#security">Security</a><a href="#conventions">Conventions</a><h4>Resources</h4><a href="#contacts">Contacts</a><a href="#companies">Companies</a><a href="#leads">Leads</a><a href="#deals">Deals</a><a href="#activities">Activities</a><a href="#tasks">Tasks</a><a href="#customers">Customers</a><a href="#users">Users</a><h4>Events</h4><a href="#webhooks">Webhooks</a><a href="#errors">Errors</a><a href="#limits">Rate Limits</a></aside><article class="doc-article"><div class="breadcrumb">API / Reference</div><h2 id="quickstart">Quick Start</h2><p>Use an API credential issued for your approved Ally environment. Keep private credentials server-side.</p><pre class="code">curl -X GET https://your-ally-environment.example/api/v1/contacts \
  -H "Authorization: Bearer YOUR_API_TOKEN" \
  -H "Accept: application/json"</pre><h2 id="auth">Authentication</h2><p>Production authentication and credential types will be finalized with the separate CRM backend.</p><h2 id="security">Security</h2><p>Use HTTPS, protect credentials, restrict access, rotate keys when required, and validate webhook authenticity.</p><h2 id="conventions">API Conventions</h2><p>JSON request and response bodies, predictable plural resources, explicit status codes, and versioned paths.</p><h2 id="contacts">Contacts</h2><pre class="code">GET    /api/v1/contacts
POST   /api/v1/contacts
GET    /api/v1/contacts/{id}
PATCH  /api/v1/contacts/{id}
DELETE /api/v1/contacts/{id}</pre><h2 id="companies">Companies</h2><pre class="code">GET   /api/v1/companies
POST  /api/v1/companies
GET   /api/v1/companies/{id}
PATCH /api/v1/companies/{id}</pre><h2 id="leads">Leads</h2><pre class="code">GET   /api/v1/leads
POST  /api/v1/leads
GET   /api/v1/leads/{id}
PATCH /api/v1/leads/{id}</pre><h2 id="deals">Deals</h2><pre class="code">GET   /api/v1/deals
POST  /api/v1/deals
GET   /api/v1/deals/{id}
PATCH /api/v1/deals/{id}</pre><h2 id="activities">Activities</h2><pre class="code">GET  /api/v1/activities
POST /api/v1/activities</pre><h2 id="tasks">Tasks</h2><pre class="code">GET  /api/v1/tasks
POST /api/v1/tasks</pre><h2 id="customers">Customers</h2><pre class="code">GET /api/v1/customers
GET /api/v1/customers/{id}</pre><h2 id="users">Users</h2><pre class="code">GET /api/v1/users
GET /api/v1/users/{id}</pre><h2 id="webhooks">Webhooks</h2><p>Use webhook subscriptions to send supported Ally CRM events to external systems. Receiving applications should verify signatures and process retries safely.</p><pre class="code">{"event":"contact.updated","id":"evt_example","data":{"contact_id":123}}</pre><h2 id="errors">Errors</h2><pre class="code">{"error":{"code":"validation_error","message":"One or more fields are invalid."}}</pre><h2 id="limits">Rate Limits</h2><p>Limits may vary by customer plan and environment. Applications should handle HTTP 429 responses with backoff.</p></article></div></section><?php include __DIR__.'/../includes/footer.php'; ?>