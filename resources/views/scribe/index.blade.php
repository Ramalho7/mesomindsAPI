<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost:8000";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.6.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.6.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-autenticacao" class="tocify-header">
                <li class="tocify-item level-1" data-unique="autenticacao">
                    <a href="#autenticacao">Autenticação</a>
                </li>
                                    <ul id="tocify-subheader-autenticacao" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="autenticacao-POSTapi-register">
                                <a href="#autenticacao-POSTapi-register">Self-register de usuários na plataforma.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="autenticacao-POSTapi-login">
                                <a href="#autenticacao-POSTapi-login">Login usuários de usuários na plataforma.</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-conteudos">
                                <a href="#endpoints-GETapi-conteudos">GET api/conteudos</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-conteudos--conteudo_id-">
                                <a href="#endpoints-GETapi-conteudos--conteudo_id-">GET api/conteudos/{conteudo_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-tiposconteudo">
                                <a href="#endpoints-GETapi-tiposconteudo">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-tagsconteudo">
                                <a href="#endpoints-GETapi-tagsconteudo">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-questoes">
                                <a href="#endpoints-GETapi-questoes">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-questoescolecao">
                                <a href="#endpoints-GETapi-questoescolecao">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-questoescolecao--questoescolecao-">
                                <a href="#endpoints-GETapi-questoescolecao--questoescolecao-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-logout">
                                <a href="#endpoints-POSTapi-logout">POST api/logout</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-validatetoken">
                                <a href="#endpoints-POSTapi-validatetoken">POST api/validatetoken</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-materias-filter">
                                <a href="#endpoints-GETapi-materias-filter">GET api/materias/filter</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PATCHapi-materias--materia_id--status">
                                <a href="#endpoints-PATCHapi-materias--materia_id--status">PATCH api/materias/{materia_id}/status</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-materias">
                                <a href="#endpoints-GETapi-materias">GET api/materias</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-materias">
                                <a href="#endpoints-POSTapi-materias">POST api/materias</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-materias--id-">
                                <a href="#endpoints-GETapi-materias--id-">GET api/materias/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-materias--id-">
                                <a href="#endpoints-PUTapi-materias--id-">PUT api/materias/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-materias--id-">
                                <a href="#endpoints-DELETEapi-materias--id-">DELETE api/materias/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PATCHapi-conteudos--conteudo--status">
                                <a href="#endpoints-PATCHapi-conteudos--conteudo--status">PATCH api/conteudos/{conteudo}/status</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-conteudos">
                                <a href="#endpoints-POSTapi-conteudos">POST api/conteudos</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-conteudos--id-">
                                <a href="#endpoints-PUTapi-conteudos--id-">PUT api/conteudos/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-conteudos--id-">
                                <a href="#endpoints-DELETEapi-conteudos--id-">DELETE api/conteudos/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PATCHapi-tiposconteudo--tiposconteudo--status">
                                <a href="#endpoints-PATCHapi-tiposconteudo--tiposconteudo--status">PATCH api/tiposconteudo/{tiposconteudo}/status</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-tiposconteudo">
                                <a href="#endpoints-POSTapi-tiposconteudo">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-tiposconteudo--id-">
                                <a href="#endpoints-GETapi-tiposconteudo--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-tiposconteudo--id-">
                                <a href="#endpoints-PUTapi-tiposconteudo--id-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-tiposconteudo--id-">
                                <a href="#endpoints-DELETEapi-tiposconteudo--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PATCHapi-tagsconteudo--tagsconteudo--status">
                                <a href="#endpoints-PATCHapi-tagsconteudo--tagsconteudo--status">PATCH api/tagsconteudo/{tagsconteudo}/status</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-tagsconteudo">
                                <a href="#endpoints-POSTapi-tagsconteudo">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-tagsconteudo--id-">
                                <a href="#endpoints-GETapi-tagsconteudo--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-tagsconteudo--id-">
                                <a href="#endpoints-PUTapi-tagsconteudo--id-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-tagsconteudo--id-">
                                <a href="#endpoints-DELETEapi-tagsconteudo--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PATCHapi-questoes--questo--status">
                                <a href="#endpoints-PATCHapi-questoes--questo--status">Change the status of the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-questoes">
                                <a href="#endpoints-POSTapi-questoes">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-questoes--id-">
                                <a href="#endpoints-GETapi-questoes--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-questoes--id-">
                                <a href="#endpoints-PUTapi-questoes--id-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-questoes--id-">
                                <a href="#endpoints-DELETEapi-questoes--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PATCHapi-questoescolecao--questoescolecao--status">
                                <a href="#endpoints-PATCHapi-questoescolecao--questoescolecao--status">PATCH api/questoescolecao/{questoescolecao}/status</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-questoescolecao">
                                <a href="#endpoints-POSTapi-questoescolecao">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-questoescolecao--id-">
                                <a href="#endpoints-PUTapi-questoescolecao--id-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-questoescolecao--id-">
                                <a href="#endpoints-DELETEapi-questoescolecao--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-respostasalunos--respostaaluno--corrigir">
                                <a href="#endpoints-POSTapi-respostasalunos--respostaaluno--corrigir">POST api/respostasalunos/{respostaaluno}/corrigir</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-respostaalunos">
                                <a href="#endpoints-GETapi-respostaalunos">GET api/respostaalunos</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-respostaalunos">
                                <a href="#endpoints-POSTapi-respostaalunos">POST api/respostaalunos</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-respostaalunos--id-">
                                <a href="#endpoints-GETapi-respostaalunos--id-">GET api/respostaalunos/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-respostaalunos--id-">
                                <a href="#endpoints-PUTapi-respostaalunos--id-">PUT api/respostaalunos/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-respostaalunos--id-">
                                <a href="#endpoints-DELETEapi-respostaalunos--id-">DELETE api/respostaalunos/{id}</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-usuarios" class="tocify-header">
                <li class="tocify-item level-1" data-unique="usuarios">
                    <a href="#usuarios">Usuários</a>
                </li>
                                    <ul id="tocify-subheader-usuarios" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="usuarios-PUTapi-users--user_id--password">
                                <a href="#usuarios-PUTapi-users--user_id--password">updatePassword: Atualiza a senha de um usuário do sistema.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="usuarios-GETapi-users">
                                <a href="#usuarios-GETapi-users">Index: Retorna uma lista paginada de usuários do sistema com filtros opcionais.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="usuarios-POSTapi-users">
                                <a href="#usuarios-POSTapi-users">Store: Cria um novo usuário do sistema, criador por: ADMIN, moderador ou operador.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="usuarios-GETapi-users--id-">
                                <a href="#usuarios-GETapi-users--id-">Show: Retorna os detalhes de um usuário do sistema.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="usuarios-PUTapi-users--id-">
                                <a href="#usuarios-PUTapi-users--id-">update: Atualiza os dados de um usuário do sistema.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="usuarios-DELETEapi-users--id-">
                                <a href="#usuarios-DELETEapi-users--id-">Destroy: Remove um usuário do sistema.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="usuarios-PATCHapi-users--user_id--status">
                                <a href="#usuarios-PATCHapi-users--user_id--status">changeStatus: Altera o status de um usuário do sistema.</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: December 14, 2025</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost:8000</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="autenticacao">Autenticação</h1>

    

                                <h2 id="autenticacao-POSTapi-register">Self-register de usuários na plataforma.</h2>

<p>
</p>



<span id="example-requests-POSTapi-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"nome\": \"Jessica Jones\",
    \"email\": \"jessica@example.com\",
    \"password\": \"secret123\",
    \"tipo\": \"Aluno\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nome": "Jessica Jones",
    "email": "jessica@example.com",
    "password": "secret123",
    "tipo": "Aluno"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-register">
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Cadastro realizado com sucesso&quot;,
    &quot;token&quot;: &quot;eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9...&quot;,
    &quot;user&quot;: {
        &quot;id&quot;: 4,
        &quot;nome&quot;: &quot;Jessica Jones&quot;,
        &quot;email&quot;: &quot;jessica@example.com&quot;,
        &quot;tipo&quot;: &quot;admin&quot;,
        &quot;status&quot;: &quot;Ativo&quot;,
        &quot;criador&quot;: null,
        &quot;created_at&quot;: &quot;2025-11-28T12:34:56.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-11-28T12:34:56.000000Z&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (403):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Usu&aacute;rios autenticados devem usar a rota /api/users para criar novos usu&aacute;rios&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Erro ao realizar cadastro&quot;,
    &quot;error&quot;: &quot;mensagem da exce&ccedil;&atilde;o&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-register"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-register">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-register" data-method="POST"
      data-path="api/register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-register"
                    onclick="tryItOut('POSTapi-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-register"
                    onclick="cancelTryOut('POSTapi-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-register"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>nome</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="nome"                data-endpoint="POSTapi-register"
               value="Jessica Jones"
               data-component="body">
    <br>
<p>Nome completo do usuário. (Poderá ser usado como username). Example: <code>Jessica Jones</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-register"
               value="jessica@example.com"
               data-component="body">
    <br>
<p>Email válido do usuário. Must be a valid email address. Example: <code>jessica@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-register"
               value="secret123"
               data-component="body">
    <br>
<p>Senha (mínimo 8 caracteres). Must be at least 8 characters. Example: <code>secret123</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>tipo</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="tipo"                data-endpoint="POSTapi-register"
               value="Aluno"
               data-component="body">
    <br>
<p>Tipo/role do usuário. Valores: Aluno ou Professor. Example: <code>Aluno</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>Aluno</code></li> <li><code>Professor</code></li></ul>
        </div>
        </form>

                    <h2 id="autenticacao-POSTapi-login">Login usuários de usuários na plataforma.</h2>

<p>
</p>



<span id="example-requests-POSTapi-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"usuario@exemplo.com\",
    \"password\": \"senha123\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "usuario@exemplo.com",
    "password": "senha123"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-login">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Login realizado com sucesso&quot;,
    &quot;token&quot;: &quot;eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9...&quot;,
    &quot;user&quot;: {
        &quot;id&quot;: 4,
        &quot;nome&quot;: &quot;Jessica Jones&quot;,
        &quot;email&quot;: &quot;jessica@example.com&quot;,
        &quot;tipo&quot;: &quot;admin&quot;,
        &quot;status&quot;: &quot;Ativo&quot;,
        &quot;criador&quot;: null,
        &quot;created_at&quot;: &quot;2025-11-28T12:34:56.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-11-28T12:34:56.000000Z&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Credenciais inv&aacute;lidas&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Usu&aacute;rio inativo&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Usu&aacute;rio bloqueado&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Erro ao realizar login&quot;,
    &quot;error&quot;: &quot;mensagem da exce&ccedil;&atilde;o&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-login"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-login">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-login" data-method="POST"
      data-path="api/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-login"
                    onclick="tryItOut('POSTapi-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-login"
                    onclick="cancelTryOut('POSTapi-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-login"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-login"
               value="usuario@exemplo.com"
               data-component="body">
    <br>
<p>Email do usuário cadastrado. Must be a valid email address. The <code>email</code> of an existing record in the system_users table. Example: <code>usuario@exemplo.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-login"
               value="senha123"
               data-component="body">
    <br>
<p>Senha do usuário. Must be at least 6 characters. Example: <code>senha123</code></p>
        </div>
        </form>

                <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-conteudos">GET api/conteudos</h2>

<p>
</p>



<span id="example-requests-GETapi-conteudos">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/conteudos" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/conteudos"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-conteudos">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: {
        &quot;current_page&quot;: 1,
        &quot;data&quot;: [
            {
                &quot;id&quot;: 2,
                &quot;title&quot;: &quot;Quos tenetur sapiente et sint commodi rerum.&quot;,
                &quot;content&quot;: &quot;Suscipit animi ipsam eos voluptas velit totam temporibus. Voluptatum doloribus minima quasi iusto veniam temporibus iusto. Earum ea illum ex iste aliquam.&quot;,
                &quot;id_materia&quot;: null,
                &quot;content_types_id&quot;: 22,
                &quot;criador&quot;: 133,
                &quot;ultimo_editor&quot;: 134,
                &quot;status&quot;: &quot;Rascunho&quot;,
                &quot;published_at&quot;: null,
                &quot;created_at&quot;: &quot;2025-11-11T23:34:06.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-11-11T23:34:06.000000Z&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: 133,
                    &quot;nome&quot;: &quot;Oral Roob&quot;,
                    &quot;email&quot;: &quot;heath.walter@example.com&quot;,
                    &quot;tipo&quot;: &quot;ADM&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Inativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:53.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:53.000000Z&quot;
                },
                &quot;content_type&quot;: {
                    &quot;id&quot;: 22,
                    &quot;title&quot;: &quot;Prof. Napoleon Walker I&quot;,
                    &quot;description&quot;: &quot;Tempore nihil itaque hic qui nihil.&quot;,
                    &quot;criador&quot;: 135,
                    &quot;ultimo_editor&quot;: 136,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:53.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:53.000000Z&quot;,
                    &quot;status&quot;: &quot;Ativo&quot;
                },
                &quot;content_tags&quot;: [],
                &quot;images&quot;: [],
                &quot;last_editor&quot;: {
                    &quot;id&quot;: 134,
                    &quot;nome&quot;: &quot;Mrs. Kelli Kerluke&quot;,
                    &quot;email&quot;: &quot;bzemlak@example.org&quot;,
                    &quot;tipo&quot;: &quot;Moderador&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Bloqueado&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:53.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:53.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 3,
                &quot;title&quot;: &quot;Numquam illum et nulla quaerat rerum quae nobis.&quot;,
                &quot;content&quot;: &quot;Laboriosam sed nihil quo mollitia rerum explicabo fugit aut. Tempore ab delectus error repellat aut fuga. Et ea voluptatem incidunt ad non culpa id provident. Id velit et maiores.&quot;,
                &quot;id_materia&quot;: null,
                &quot;content_types_id&quot;: 23,
                &quot;criador&quot;: 137,
                &quot;ultimo_editor&quot;: 138,
                &quot;status&quot;: &quot;Inativo&quot;,
                &quot;published_at&quot;: null,
                &quot;created_at&quot;: &quot;2025-11-11T23:34:06.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-11-11T23:34:06.000000Z&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: 137,
                    &quot;nome&quot;: &quot;Ms. Keara Huel DDS&quot;,
                    &quot;email&quot;: &quot;lillie.kihn@example.net&quot;,
                    &quot;tipo&quot;: &quot;Moderador&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Bloqueado&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:53.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:53.000000Z&quot;
                },
                &quot;content_type&quot;: {
                    &quot;id&quot;: 23,
                    &quot;title&quot;: &quot;Dr. Uriel Dooley MD&quot;,
                    &quot;description&quot;: &quot;Assumenda qui dolor ut a voluptatem.&quot;,
                    &quot;criador&quot;: 139,
                    &quot;ultimo_editor&quot;: 140,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:54.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:54.000000Z&quot;,
                    &quot;status&quot;: &quot;Ativo&quot;
                },
                &quot;content_tags&quot;: [],
                &quot;images&quot;: [],
                &quot;last_editor&quot;: {
                    &quot;id&quot;: 138,
                    &quot;nome&quot;: &quot;Frederick Wilkinson&quot;,
                    &quot;email&quot;: &quot;trey.schultz@example.com&quot;,
                    &quot;tipo&quot;: &quot;Moderador&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Bloqueado&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:54.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:54.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 5,
                &quot;title&quot;: &quot;Labore quaerat sapiente inventore illo aperiam.&quot;,
                &quot;content&quot;: &quot;Dolorum alias excepturi eligendi expedita ullam ut. Iste earum nulla enim delectus eum sed provident. Maiores quisquam similique odio commodi at. Ab odit distinctio est repellat eligendi.&quot;,
                &quot;id_materia&quot;: null,
                &quot;content_types_id&quot;: 25,
                &quot;criador&quot;: 145,
                &quot;ultimo_editor&quot;: 146,
                &quot;status&quot;: &quot;Inativo&quot;,
                &quot;published_at&quot;: null,
                &quot;created_at&quot;: &quot;2025-11-11T23:34:06.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-11-11T23:34:06.000000Z&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: 145,
                    &quot;nome&quot;: &quot;Mr. Chris Baumbach Jr.&quot;,
                    &quot;email&quot;: &quot;mattie.dooley@example.org&quot;,
                    &quot;tipo&quot;: &quot;Operador&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Ativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:55.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:55.000000Z&quot;
                },
                &quot;content_type&quot;: {
                    &quot;id&quot;: 25,
                    &quot;title&quot;: &quot;Muhammad Shanahan DVM&quot;,
                    &quot;description&quot;: &quot;Et dolore ex quis.&quot;,
                    &quot;criador&quot;: 147,
                    &quot;ultimo_editor&quot;: 148,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:55.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:55.000000Z&quot;,
                    &quot;status&quot;: &quot;Inativo&quot;
                },
                &quot;content_tags&quot;: [],
                &quot;images&quot;: [],
                &quot;last_editor&quot;: {
                    &quot;id&quot;: 146,
                    &quot;nome&quot;: &quot;Dr. Natasha Boyer&quot;,
                    &quot;email&quot;: &quot;shields.lessie@example.org&quot;,
                    &quot;tipo&quot;: &quot;ADM&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Inativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:55.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:55.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 6,
                &quot;title&quot;: &quot;Aspernatur dolore nostrum odit temporibus.&quot;,
                &quot;content&quot;: &quot;Commodi ut aut aut perferendis voluptatem. Dolores ea repellat voluptas non aliquid est consectetur. Suscipit est blanditiis dolorem commodi fuga ratione qui. Sed impedit tenetur corporis quas assumenda.&quot;,
                &quot;id_materia&quot;: null,
                &quot;content_types_id&quot;: 26,
                &quot;criador&quot;: 149,
                &quot;ultimo_editor&quot;: 150,
                &quot;status&quot;: &quot;Ativo&quot;,
                &quot;published_at&quot;: null,
                &quot;created_at&quot;: &quot;2025-11-11T23:34:06.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-11-11T23:34:06.000000Z&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: 149,
                    &quot;nome&quot;: &quot;Prof. Eino Waelchi III&quot;,
                    &quot;email&quot;: &quot;skeeling@example.net&quot;,
                    &quot;tipo&quot;: &quot;ADM&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Bloqueado&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:56.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:56.000000Z&quot;
                },
                &quot;content_type&quot;: {
                    &quot;id&quot;: 26,
                    &quot;title&quot;: &quot;Ms. Retta Upton&quot;,
                    &quot;description&quot;: &quot;Sed aut perspiciatis voluptates et quae error neque.&quot;,
                    &quot;criador&quot;: 151,
                    &quot;ultimo_editor&quot;: 152,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:56.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:56.000000Z&quot;,
                    &quot;status&quot;: &quot;Inativo&quot;
                },
                &quot;content_tags&quot;: [],
                &quot;images&quot;: [],
                &quot;last_editor&quot;: {
                    &quot;id&quot;: 150,
                    &quot;nome&quot;: &quot;Dr. Joelle Conn DVM&quot;,
                    &quot;email&quot;: &quot;iokon@example.com&quot;,
                    &quot;tipo&quot;: &quot;Professor&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Inativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:56.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:56.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 7,
                &quot;title&quot;: &quot;Et ut numquam provident error.&quot;,
                &quot;content&quot;: &quot;Dolor ut et nam aut vel ducimus. Rerum tempora tenetur repellat voluptatem quasi. Ut architecto velit autem sunt. Sit aperiam dolorum et nam qui eveniet aperiam.&quot;,
                &quot;id_materia&quot;: null,
                &quot;content_types_id&quot;: 27,
                &quot;criador&quot;: 153,
                &quot;ultimo_editor&quot;: 154,
                &quot;status&quot;: &quot;Ativo&quot;,
                &quot;published_at&quot;: null,
                &quot;created_at&quot;: &quot;2025-11-11T23:34:06.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-11-11T23:34:06.000000Z&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: 153,
                    &quot;nome&quot;: &quot;Dr. Kathryn Welch MD&quot;,
                    &quot;email&quot;: &quot;onolan@example.com&quot;,
                    &quot;tipo&quot;: &quot;Moderador&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Bloqueado&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:56.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:56.000000Z&quot;
                },
                &quot;content_type&quot;: {
                    &quot;id&quot;: 27,
                    &quot;title&quot;: &quot;Dr. Jerry Crist DVM&quot;,
                    &quot;description&quot;: &quot;Hic voluptatem aut praesentium rerum.&quot;,
                    &quot;criador&quot;: 155,
                    &quot;ultimo_editor&quot;: 156,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:57.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:57.000000Z&quot;,
                    &quot;status&quot;: &quot;Inativo&quot;
                },
                &quot;content_tags&quot;: [],
                &quot;images&quot;: [],
                &quot;last_editor&quot;: {
                    &quot;id&quot;: 154,
                    &quot;nome&quot;: &quot;Bobby Dicki&quot;,
                    &quot;email&quot;: &quot;hank93@example.com&quot;,
                    &quot;tipo&quot;: &quot;Operador&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Inativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:57.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:57.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 8,
                &quot;title&quot;: &quot;Voluptatem maiores sequi qui totam harum.&quot;,
                &quot;content&quot;: &quot;Voluptatem esse recusandae optio. Numquam qui ut ea eos animi tenetur voluptatum.&quot;,
                &quot;id_materia&quot;: null,
                &quot;content_types_id&quot;: 28,
                &quot;criador&quot;: 157,
                &quot;ultimo_editor&quot;: 158,
                &quot;status&quot;: &quot;Inativo&quot;,
                &quot;published_at&quot;: null,
                &quot;created_at&quot;: &quot;2025-11-11T23:34:06.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-11-11T23:34:06.000000Z&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: 157,
                    &quot;nome&quot;: &quot;Sierra Orn&quot;,
                    &quot;email&quot;: &quot;boyle.aliyah@example.net&quot;,
                    &quot;tipo&quot;: &quot;Operador&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Inativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:57.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:57.000000Z&quot;
                },
                &quot;content_type&quot;: {
                    &quot;id&quot;: 28,
                    &quot;title&quot;: &quot;Una Langosh&quot;,
                    &quot;description&quot;: &quot;Laborum ut iusto omnis corrupti aliquam.&quot;,
                    &quot;criador&quot;: 159,
                    &quot;ultimo_editor&quot;: 160,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:58.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:58.000000Z&quot;,
                    &quot;status&quot;: &quot;Inativo&quot;
                },
                &quot;content_tags&quot;: [],
                &quot;images&quot;: [],
                &quot;last_editor&quot;: {
                    &quot;id&quot;: 158,
                    &quot;nome&quot;: &quot;Patsy Swaniawski&quot;,
                    &quot;email&quot;: &quot;obie.towne@example.net&quot;,
                    &quot;tipo&quot;: &quot;Operador&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Bloqueado&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:57.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:57.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 9,
                &quot;title&quot;: &quot;Vel vel doloribus nihil qui.&quot;,
                &quot;content&quot;: &quot;Non harum rerum corrupti maxime. Quos cum voluptates voluptatum qui. Voluptas delectus ipsam quibusdam tenetur sint non sed.&quot;,
                &quot;id_materia&quot;: null,
                &quot;content_types_id&quot;: 29,
                &quot;criador&quot;: 161,
                &quot;ultimo_editor&quot;: 162,
                &quot;status&quot;: &quot;Ativo&quot;,
                &quot;published_at&quot;: null,
                &quot;created_at&quot;: &quot;2025-11-11T23:34:06.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-11-11T23:34:06.000000Z&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: 161,
                    &quot;nome&quot;: &quot;Randal Kub&quot;,
                    &quot;email&quot;: &quot;hoppe.aileen@example.org&quot;,
                    &quot;tipo&quot;: &quot;Professor&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Ativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:58.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:58.000000Z&quot;
                },
                &quot;content_type&quot;: {
                    &quot;id&quot;: 29,
                    &quot;title&quot;: &quot;Antoinette Kassulke&quot;,
                    &quot;description&quot;: &quot;Officiis nisi deserunt dolores quis.&quot;,
                    &quot;criador&quot;: 163,
                    &quot;ultimo_editor&quot;: 164,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:58.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:58.000000Z&quot;,
                    &quot;status&quot;: &quot;Inativo&quot;
                },
                &quot;content_tags&quot;: [],
                &quot;images&quot;: [],
                &quot;last_editor&quot;: {
                    &quot;id&quot;: 162,
                    &quot;nome&quot;: &quot;Roy Abbott&quot;,
                    &quot;email&quot;: &quot;ehyatt@example.com&quot;,
                    &quot;tipo&quot;: &quot;Moderador&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Inativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:58.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:58.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 10,
                &quot;title&quot;: &quot;Atque et est voluptates saepe suscipit.&quot;,
                &quot;content&quot;: &quot;Amet alias molestiae quibusdam est. Tempore voluptatem architecto similique. Eum aut omnis est deserunt. Nisi in animi non omnis et.&quot;,
                &quot;id_materia&quot;: null,
                &quot;content_types_id&quot;: 30,
                &quot;criador&quot;: 165,
                &quot;ultimo_editor&quot;: 166,
                &quot;status&quot;: &quot;Ativo&quot;,
                &quot;published_at&quot;: null,
                &quot;created_at&quot;: &quot;2025-11-11T23:34:06.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-11-11T23:34:06.000000Z&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: 165,
                    &quot;nome&quot;: &quot;Adan Larson&quot;,
                    &quot;email&quot;: &quot;otha.becker@example.com&quot;,
                    &quot;tipo&quot;: &quot;Operador&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Bloqueado&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:59.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:59.000000Z&quot;
                },
                &quot;content_type&quot;: {
                    &quot;id&quot;: 30,
                    &quot;title&quot;: &quot;Amparo Goldner&quot;,
                    &quot;description&quot;: &quot;Quia delectus sit eveniet explicabo voluptas quo voluptatum accusamus.&quot;,
                    &quot;criador&quot;: 167,
                    &quot;ultimo_editor&quot;: 168,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:59.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:59.000000Z&quot;,
                    &quot;status&quot;: &quot;Inativo&quot;
                },
                &quot;content_tags&quot;: [],
                &quot;images&quot;: [],
                &quot;last_editor&quot;: {
                    &quot;id&quot;: 166,
                    &quot;nome&quot;: &quot;Lola Stracke&quot;,
                    &quot;email&quot;: &quot;joy00@example.org&quot;,
                    &quot;tipo&quot;: &quot;Aluno&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Inativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:59.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:59.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 11,
                &quot;title&quot;: &quot;Sed et illum odio provident nemo.&quot;,
                &quot;content&quot;: &quot;In ad sapiente soluta neque impedit. Iure natus quo vero ad aut. Similique nobis eaque ea et autem ipsam.&quot;,
                &quot;id_materia&quot;: null,
                &quot;content_types_id&quot;: 31,
                &quot;criador&quot;: 169,
                &quot;ultimo_editor&quot;: 170,
                &quot;status&quot;: &quot;Rascunho&quot;,
                &quot;published_at&quot;: null,
                &quot;created_at&quot;: &quot;2025-11-11T23:34:06.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-11-11T23:34:06.000000Z&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: 169,
                    &quot;nome&quot;: &quot;Mrs. Marguerite Gerlach III&quot;,
                    &quot;email&quot;: &quot;thuel@example.org&quot;,
                    &quot;tipo&quot;: &quot;Moderador&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Ativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:59.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:59.000000Z&quot;
                },
                &quot;content_type&quot;: {
                    &quot;id&quot;: 31,
                    &quot;title&quot;: &quot;Mr. Hilario O&#039;Keefe&quot;,
                    &quot;description&quot;: &quot;Praesentium quis mollitia sequi magnam est iure tempora.&quot;,
                    &quot;criador&quot;: 171,
                    &quot;ultimo_editor&quot;: 172,
                    &quot;created_at&quot;: &quot;2025-11-11T23:34:00.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:34:00.000000Z&quot;,
                    &quot;status&quot;: &quot;Inativo&quot;
                },
                &quot;content_tags&quot;: [],
                &quot;images&quot;: [],
                &quot;last_editor&quot;: {
                    &quot;id&quot;: 170,
                    &quot;nome&quot;: &quot;Dave Kuhn&quot;,
                    &quot;email&quot;: &quot;rice.beatrice@example.com&quot;,
                    &quot;tipo&quot;: &quot;Aluno&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Ativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:59.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:59.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 12,
                &quot;title&quot;: &quot;Voluptate nihil veniam qui.&quot;,
                &quot;content&quot;: &quot;Aspernatur voluptas asperiores optio pariatur nobis. Quis et impedit dolorem quae aut ea est. A rem sapiente modi recusandae.&quot;,
                &quot;id_materia&quot;: null,
                &quot;content_types_id&quot;: 32,
                &quot;criador&quot;: 173,
                &quot;ultimo_editor&quot;: 174,
                &quot;status&quot;: &quot;Ativo&quot;,
                &quot;published_at&quot;: null,
                &quot;created_at&quot;: &quot;2025-11-11T23:34:06.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-11-11T23:34:06.000000Z&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: 173,
                    &quot;nome&quot;: &quot;Arvid Champlin&quot;,
                    &quot;email&quot;: &quot;von.chanel@example.net&quot;,
                    &quot;tipo&quot;: &quot;Aluno&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Ativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:34:00.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:34:00.000000Z&quot;
                },
                &quot;content_type&quot;: {
                    &quot;id&quot;: 32,
                    &quot;title&quot;: &quot;Ronny Wiza&quot;,
                    &quot;description&quot;: &quot;Illo quia inventore qui fuga et sit.&quot;,
                    &quot;criador&quot;: 175,
                    &quot;ultimo_editor&quot;: 176,
                    &quot;created_at&quot;: &quot;2025-11-11T23:34:01.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:34:01.000000Z&quot;,
                    &quot;status&quot;: &quot;Inativo&quot;
                },
                &quot;content_tags&quot;: [],
                &quot;images&quot;: [],
                &quot;last_editor&quot;: {
                    &quot;id&quot;: 174,
                    &quot;nome&quot;: &quot;Ahmad Durgan&quot;,
                    &quot;email&quot;: &quot;vbalistreri@example.org&quot;,
                    &quot;tipo&quot;: &quot;Moderador&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Bloqueado&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:34:00.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:34:00.000000Z&quot;
                }
            }
        ],
        &quot;first_page_url&quot;: &quot;http://localhost:8000/api/conteudos?page=1&quot;,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 3,
        &quot;last_page_url&quot;: &quot;http://localhost:8000/api/conteudos?page=3&quot;,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;page&quot;: null,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/conteudos?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;page&quot;: 1,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/conteudos?page=2&quot;,
                &quot;label&quot;: &quot;2&quot;,
                &quot;page&quot;: 2,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/conteudos?page=3&quot;,
                &quot;label&quot;: &quot;3&quot;,
                &quot;page&quot;: 3,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/conteudos?page=2&quot;,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;page&quot;: 2,
                &quot;active&quot;: false
            }
        ],
        &quot;next_page_url&quot;: &quot;http://localhost:8000/api/conteudos?page=2&quot;,
        &quot;path&quot;: &quot;http://localhost:8000/api/conteudos&quot;,
        &quot;per_page&quot;: 10,
        &quot;prev_page_url&quot;: null,
        &quot;to&quot;: 10,
        &quot;total&quot;: 23
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-conteudos" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-conteudos"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-conteudos"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-conteudos" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-conteudos">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-conteudos" data-method="GET"
      data-path="api/conteudos"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-conteudos', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-conteudos"
                    onclick="tryItOut('GETapi-conteudos');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-conteudos"
                    onclick="cancelTryOut('GETapi-conteudos');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-conteudos"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/conteudos</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-conteudos"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-conteudos"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-conteudos--conteudo_id-">GET api/conteudos/{conteudo_id}</h2>

<p>
</p>



<span id="example-requests-GETapi-conteudos--conteudo_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/conteudos/2" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/conteudos/2"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-conteudos--conteudo_id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: {
        &quot;id&quot;: 2,
        &quot;title&quot;: &quot;Quos tenetur sapiente et sint commodi rerum.&quot;,
        &quot;content&quot;: &quot;Suscipit animi ipsam eos voluptas velit totam temporibus. Voluptatum doloribus minima quasi iusto veniam temporibus iusto. Earum ea illum ex iste aliquam.&quot;,
        &quot;id_materia&quot;: null,
        &quot;content_types_id&quot;: 22,
        &quot;criador&quot;: 133,
        &quot;ultimo_editor&quot;: 134,
        &quot;status&quot;: &quot;Rascunho&quot;,
        &quot;published_at&quot;: null,
        &quot;created_at&quot;: &quot;2025-11-11T23:34:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-11-11T23:34:06.000000Z&quot;,
        &quot;creator&quot;: {
            &quot;id&quot;: 133,
            &quot;nome&quot;: &quot;Oral Roob&quot;,
            &quot;email&quot;: &quot;heath.walter@example.com&quot;,
            &quot;tipo&quot;: &quot;ADM&quot;,
            &quot;criador&quot;: null,
            &quot;ultimo_editor&quot;: null,
            &quot;status&quot;: &quot;Inativo&quot;,
            &quot;created_at&quot;: &quot;2025-11-11T23:33:53.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-11-11T23:33:53.000000Z&quot;
        },
        &quot;content_type&quot;: {
            &quot;id&quot;: 22,
            &quot;title&quot;: &quot;Prof. Napoleon Walker I&quot;,
            &quot;description&quot;: &quot;Tempore nihil itaque hic qui nihil.&quot;,
            &quot;criador&quot;: 135,
            &quot;ultimo_editor&quot;: 136,
            &quot;created_at&quot;: &quot;2025-11-11T23:33:53.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-11-11T23:33:53.000000Z&quot;,
            &quot;status&quot;: &quot;Ativo&quot;
        },
        &quot;content_tags&quot;: [],
        &quot;images&quot;: []
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-conteudos--conteudo_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-conteudos--conteudo_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-conteudos--conteudo_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-conteudos--conteudo_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-conteudos--conteudo_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-conteudos--conteudo_id-" data-method="GET"
      data-path="api/conteudos/{conteudo_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-conteudos--conteudo_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-conteudos--conteudo_id-"
                    onclick="tryItOut('GETapi-conteudos--conteudo_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-conteudos--conteudo_id-"
                    onclick="cancelTryOut('GETapi-conteudos--conteudo_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-conteudos--conteudo_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/conteudos/{conteudo_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-conteudos--conteudo_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-conteudos--conteudo_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>conteudo_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="conteudo_id"                data-endpoint="GETapi-conteudos--conteudo_id-"
               value="2"
               data-component="url">
    <br>
<p>The ID of the conteudo. Example: <code>2</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-tiposconteudo">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-tiposconteudo">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/tiposconteudo" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/tiposconteudo"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-tiposconteudo">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: {
        &quot;current_page&quot;: 1,
        &quot;data&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;title&quot;: &quot;Miss Adella Pfannerstill&quot;,
                &quot;description&quot;: &quot;Nisi quaerat non consectetur.&quot;,
                &quot;criador&quot;: 89,
                &quot;ultimo_editor&quot;: 90,
                &quot;created_at&quot;: &quot;2025-11-11T23:33:52.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-11-11T23:33:52.000000Z&quot;,
                &quot;status&quot;: &quot;Inativo&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: 89,
                    &quot;nome&quot;: &quot;Zola Koch&quot;,
                    &quot;email&quot;: &quot;schiller.ethan@example.org&quot;,
                    &quot;tipo&quot;: &quot;Moderador&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Ativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:45.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:45.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: 90,
                    &quot;nome&quot;: &quot;Dr. Estella Will I&quot;,
                    &quot;email&quot;: &quot;bgaylord@example.net&quot;,
                    &quot;tipo&quot;: &quot;Professor&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Inativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:45.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:45.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 2,
                &quot;title&quot;: &quot;Chloe Turner&quot;,
                &quot;description&quot;: &quot;Qui suscipit vitae et maiores id.&quot;,
                &quot;criador&quot;: 91,
                &quot;ultimo_editor&quot;: 92,
                &quot;created_at&quot;: &quot;2025-11-11T23:33:52.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-11-11T23:33:52.000000Z&quot;,
                &quot;status&quot;: &quot;Ativo&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: 91,
                    &quot;nome&quot;: &quot;Mr. Jess Murazik Jr.&quot;,
                    &quot;email&quot;: &quot;maurine.nolan@example.com&quot;,
                    &quot;tipo&quot;: &quot;ADM&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Inativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:45.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:45.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: 92,
                    &quot;nome&quot;: &quot;Prof. Prudence Wolff&quot;,
                    &quot;email&quot;: &quot;dooley.lenore@example.net&quot;,
                    &quot;tipo&quot;: &quot;ADM&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Ativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:45.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:45.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 3,
                &quot;title&quot;: &quot;Dr. Marlin Lakin&quot;,
                &quot;description&quot;: &quot;Architecto repudiandae ab quia possimus.&quot;,
                &quot;criador&quot;: 93,
                &quot;ultimo_editor&quot;: 94,
                &quot;created_at&quot;: &quot;2025-11-11T23:33:52.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-11-11T23:33:52.000000Z&quot;,
                &quot;status&quot;: &quot;Inativo&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: 93,
                    &quot;nome&quot;: &quot;Cheyenne Berge&quot;,
                    &quot;email&quot;: &quot;bauch.floyd@example.net&quot;,
                    &quot;tipo&quot;: &quot;Aluno&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Bloqueado&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:45.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:45.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: 94,
                    &quot;nome&quot;: &quot;Alexandrine Kling&quot;,
                    &quot;email&quot;: &quot;lottie41@example.org&quot;,
                    &quot;tipo&quot;: &quot;Professor&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Ativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:46.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:46.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 4,
                &quot;title&quot;: &quot;Prof. Eli Erdman DDS&quot;,
                &quot;description&quot;: &quot;Eveniet est consequatur aut.&quot;,
                &quot;criador&quot;: 95,
                &quot;ultimo_editor&quot;: 96,
                &quot;created_at&quot;: &quot;2025-11-11T23:33:52.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-11-11T23:33:52.000000Z&quot;,
                &quot;status&quot;: &quot;Inativo&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: 95,
                    &quot;nome&quot;: &quot;Horace Ryan&quot;,
                    &quot;email&quot;: &quot;mariana75@example.net&quot;,
                    &quot;tipo&quot;: &quot;ADM&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Bloqueado&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:46.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:46.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: 96,
                    &quot;nome&quot;: &quot;Shyanne Stanton DVM&quot;,
                    &quot;email&quot;: &quot;walsh.edna@example.org&quot;,
                    &quot;tipo&quot;: &quot;Aluno&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Ativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:46.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:46.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 5,
                &quot;title&quot;: &quot;Lorna Casper&quot;,
                &quot;description&quot;: &quot;Autem tempore deleniti sed maxime.&quot;,
                &quot;criador&quot;: 97,
                &quot;ultimo_editor&quot;: 98,
                &quot;created_at&quot;: &quot;2025-11-11T23:33:52.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-11-11T23:33:52.000000Z&quot;,
                &quot;status&quot;: &quot;Ativo&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: 97,
                    &quot;nome&quot;: &quot;Aron Bechtelar I&quot;,
                    &quot;email&quot;: &quot;lowe.jerod@example.com&quot;,
                    &quot;tipo&quot;: &quot;Operador&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Inativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:46.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:46.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: 98,
                    &quot;nome&quot;: &quot;Amelia Spinka&quot;,
                    &quot;email&quot;: &quot;ymonahan@example.org&quot;,
                    &quot;tipo&quot;: &quot;Aluno&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Inativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:46.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:46.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 6,
                &quot;title&quot;: &quot;Lucile Pacocha&quot;,
                &quot;description&quot;: &quot;Sed voluptates vitae est reprehenderit cupiditate unde nemo.&quot;,
                &quot;criador&quot;: 99,
                &quot;ultimo_editor&quot;: 100,
                &quot;created_at&quot;: &quot;2025-11-11T23:33:52.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-11-11T23:33:52.000000Z&quot;,
                &quot;status&quot;: &quot;Ativo&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: 99,
                    &quot;nome&quot;: &quot;Florida Hand III&quot;,
                    &quot;email&quot;: &quot;zlueilwitz@example.org&quot;,
                    &quot;tipo&quot;: &quot;Moderador&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Bloqueado&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:47.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:47.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: 100,
                    &quot;nome&quot;: &quot;Merritt Bayer&quot;,
                    &quot;email&quot;: &quot;eriberto10@example.org&quot;,
                    &quot;tipo&quot;: &quot;Operador&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Ativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:47.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:47.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 7,
                &quot;title&quot;: &quot;Elmore Kuvalis&quot;,
                &quot;description&quot;: &quot;Hic inventore repellendus sunt porro.&quot;,
                &quot;criador&quot;: 101,
                &quot;ultimo_editor&quot;: 102,
                &quot;created_at&quot;: &quot;2025-11-11T23:33:52.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-11-11T23:33:52.000000Z&quot;,
                &quot;status&quot;: &quot;Inativo&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: 101,
                    &quot;nome&quot;: &quot;Fabiola Block&quot;,
                    &quot;email&quot;: &quot;adams.lisette@example.org&quot;,
                    &quot;tipo&quot;: &quot;Operador&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Inativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:47.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:47.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: 102,
                    &quot;nome&quot;: &quot;Aditya Conroy&quot;,
                    &quot;email&quot;: &quot;bertram.bernier@example.org&quot;,
                    &quot;tipo&quot;: &quot;Operador&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Ativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:47.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:47.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 8,
                &quot;title&quot;: &quot;Mrs. Natalia Rice V&quot;,
                &quot;description&quot;: &quot;A fugit atque quisquam maiores.&quot;,
                &quot;criador&quot;: 103,
                &quot;ultimo_editor&quot;: 104,
                &quot;created_at&quot;: &quot;2025-11-11T23:33:52.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-11-11T23:33:52.000000Z&quot;,
                &quot;status&quot;: &quot;Inativo&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: 103,
                    &quot;nome&quot;: &quot;Mr. Dameon Feest V&quot;,
                    &quot;email&quot;: &quot;ward.desiree@example.org&quot;,
                    &quot;tipo&quot;: &quot;Professor&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Inativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:47.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:47.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: 104,
                    &quot;nome&quot;: &quot;Geovanni Schiller&quot;,
                    &quot;email&quot;: &quot;valentin77@example.org&quot;,
                    &quot;tipo&quot;: &quot;Professor&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Ativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:47.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:47.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 9,
                &quot;title&quot;: &quot;Savanna Casper&quot;,
                &quot;description&quot;: &quot;Iste non voluptas pariatur iste laborum et.&quot;,
                &quot;criador&quot;: 105,
                &quot;ultimo_editor&quot;: 106,
                &quot;created_at&quot;: &quot;2025-11-11T23:33:52.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-11-11T23:33:52.000000Z&quot;,
                &quot;status&quot;: &quot;Inativo&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: 105,
                    &quot;nome&quot;: &quot;Caroline Dicki&quot;,
                    &quot;email&quot;: &quot;malcolm.langworth@example.com&quot;,
                    &quot;tipo&quot;: &quot;Aluno&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Ativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:48.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:48.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: 106,
                    &quot;nome&quot;: &quot;Hillard Gutmann Jr.&quot;,
                    &quot;email&quot;: &quot;jaiden63@example.org&quot;,
                    &quot;tipo&quot;: &quot;Aluno&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Bloqueado&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:48.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:48.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 10,
                &quot;title&quot;: &quot;Weston Romaguera&quot;,
                &quot;description&quot;: &quot;Aliquid dolore natus error voluptas.&quot;,
                &quot;criador&quot;: 107,
                &quot;ultimo_editor&quot;: 108,
                &quot;created_at&quot;: &quot;2025-11-11T23:33:52.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-11-11T23:33:52.000000Z&quot;,
                &quot;status&quot;: &quot;Inativo&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: 107,
                    &quot;nome&quot;: &quot;Melyna Lockman&quot;,
                    &quot;email&quot;: &quot;fdavis@example.com&quot;,
                    &quot;tipo&quot;: &quot;Professor&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Inativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:48.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:48.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: 108,
                    &quot;nome&quot;: &quot;Ms. Raphaelle Cummerata DVM&quot;,
                    &quot;email&quot;: &quot;ywilliamson@example.com&quot;,
                    &quot;tipo&quot;: &quot;Professor&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Inativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:48.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:48.000000Z&quot;
                }
            }
        ],
        &quot;first_page_url&quot;: &quot;http://localhost:8000/api/tiposconteudo?page=1&quot;,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 5,
        &quot;last_page_url&quot;: &quot;http://localhost:8000/api/tiposconteudo?page=5&quot;,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;page&quot;: null,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/tiposconteudo?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;page&quot;: 1,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/tiposconteudo?page=2&quot;,
                &quot;label&quot;: &quot;2&quot;,
                &quot;page&quot;: 2,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/tiposconteudo?page=3&quot;,
                &quot;label&quot;: &quot;3&quot;,
                &quot;page&quot;: 3,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/tiposconteudo?page=4&quot;,
                &quot;label&quot;: &quot;4&quot;,
                &quot;page&quot;: 4,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/tiposconteudo?page=5&quot;,
                &quot;label&quot;: &quot;5&quot;,
                &quot;page&quot;: 5,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/tiposconteudo?page=2&quot;,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;page&quot;: 2,
                &quot;active&quot;: false
            }
        ],
        &quot;next_page_url&quot;: &quot;http://localhost:8000/api/tiposconteudo?page=2&quot;,
        &quot;path&quot;: &quot;http://localhost:8000/api/tiposconteudo&quot;,
        &quot;per_page&quot;: 10,
        &quot;prev_page_url&quot;: null,
        &quot;to&quot;: 10,
        &quot;total&quot;: 41
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-tiposconteudo" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-tiposconteudo"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-tiposconteudo"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-tiposconteudo" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-tiposconteudo">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-tiposconteudo" data-method="GET"
      data-path="api/tiposconteudo"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-tiposconteudo', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-tiposconteudo"
                    onclick="tryItOut('GETapi-tiposconteudo');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-tiposconteudo"
                    onclick="cancelTryOut('GETapi-tiposconteudo');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-tiposconteudo"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/tiposconteudo</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-tiposconteudo"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-tiposconteudo"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-tagsconteudo">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-tagsconteudo">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/tagsconteudo" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/tagsconteudo"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-tagsconteudo">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: {
        &quot;current_page&quot;: 1,
        &quot;data&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;tag_name&quot;: &quot;illo&quot;,
                &quot;is_moderator_only&quot;: 0,
                &quot;count&quot;: 24002676,
                &quot;description&quot;: &quot;Officia rerum quis deserunt eum est sequi numquam.&quot;,
                &quot;criador&quot;: 49,
                &quot;ultimo_editor&quot;: 50,
                &quot;created_at&quot;: &quot;2025-11-11T23:33:44.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-11-11T23:33:44.000000Z&quot;,
                &quot;status&quot;: &quot;Ativo&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: 49,
                    &quot;nome&quot;: &quot;Dashawn Kohler MD&quot;,
                    &quot;email&quot;: &quot;fkertzmann@example.com&quot;,
                    &quot;tipo&quot;: &quot;ADM&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Ativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:37.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:37.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: 50,
                    &quot;nome&quot;: &quot;Isom Bailey&quot;,
                    &quot;email&quot;: &quot;fmurphy@example.org&quot;,
                    &quot;tipo&quot;: &quot;Professor&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Ativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:38.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:38.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 2,
                &quot;tag_name&quot;: &quot;sint&quot;,
                &quot;is_moderator_only&quot;: 1,
                &quot;count&quot;: 9,
                &quot;description&quot;: &quot;Quia non et consectetur ipsam magni corrupti nihil.&quot;,
                &quot;criador&quot;: 51,
                &quot;ultimo_editor&quot;: 52,
                &quot;created_at&quot;: &quot;2025-11-11T23:33:44.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-11-11T23:33:44.000000Z&quot;,
                &quot;status&quot;: &quot;Inativo&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: 51,
                    &quot;nome&quot;: &quot;Augustus Larson&quot;,
                    &quot;email&quot;: &quot;vkoss@example.org&quot;,
                    &quot;tipo&quot;: &quot;ADM&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Bloqueado&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:38.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:38.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: 52,
                    &quot;nome&quot;: &quot;Murphy Sawayn&quot;,
                    &quot;email&quot;: &quot;ekertzmann@example.net&quot;,
                    &quot;tipo&quot;: &quot;Operador&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Bloqueado&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:38.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:38.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 3,
                &quot;tag_name&quot;: &quot;quia&quot;,
                &quot;is_moderator_only&quot;: 0,
                &quot;count&quot;: 9,
                &quot;description&quot;: &quot;Rerum sapiente vero quasi omnis doloremque quia quo.&quot;,
                &quot;criador&quot;: 53,
                &quot;ultimo_editor&quot;: 54,
                &quot;created_at&quot;: &quot;2025-11-11T23:33:44.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-11-11T23:33:44.000000Z&quot;,
                &quot;status&quot;: &quot;Ativo&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: 53,
                    &quot;nome&quot;: &quot;Vernon Mertz&quot;,
                    &quot;email&quot;: &quot;ghyatt@example.net&quot;,
                    &quot;tipo&quot;: &quot;Moderador&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Inativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:38.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:38.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: 54,
                    &quot;nome&quot;: &quot;Viviane Cormier MD&quot;,
                    &quot;email&quot;: &quot;lorenza.bahringer@example.org&quot;,
                    &quot;tipo&quot;: &quot;Moderador&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Bloqueado&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:38.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:38.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 4,
                &quot;tag_name&quot;: &quot;odio&quot;,
                &quot;is_moderator_only&quot;: 0,
                &quot;count&quot;: 51532,
                &quot;description&quot;: &quot;Dolores beatae debitis ut optio aliquam.&quot;,
                &quot;criador&quot;: 55,
                &quot;ultimo_editor&quot;: 56,
                &quot;created_at&quot;: &quot;2025-11-11T23:33:44.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-11-11T23:33:44.000000Z&quot;,
                &quot;status&quot;: &quot;Inativo&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: 55,
                    &quot;nome&quot;: &quot;Mona Yundt DDS&quot;,
                    &quot;email&quot;: &quot;charity.trantow@example.net&quot;,
                    &quot;tipo&quot;: &quot;Aluno&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Inativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:39.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:39.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: 56,
                    &quot;nome&quot;: &quot;Dean Weissnat&quot;,
                    &quot;email&quot;: &quot;rosie.sawayn@example.net&quot;,
                    &quot;tipo&quot;: &quot;ADM&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Inativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:39.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:39.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 5,
                &quot;tag_name&quot;: &quot;aut&quot;,
                &quot;is_moderator_only&quot;: 0,
                &quot;count&quot;: 54,
                &quot;description&quot;: &quot;Eum dolorem ut autem quis excepturi.&quot;,
                &quot;criador&quot;: 57,
                &quot;ultimo_editor&quot;: 58,
                &quot;created_at&quot;: &quot;2025-11-11T23:33:44.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-11-11T23:33:44.000000Z&quot;,
                &quot;status&quot;: &quot;Ativo&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: 57,
                    &quot;nome&quot;: &quot;Dr. Jensen Carter IV&quot;,
                    &quot;email&quot;: &quot;mauricio.upton@example.net&quot;,
                    &quot;tipo&quot;: &quot;Aluno&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Ativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:39.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:39.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: 58,
                    &quot;nome&quot;: &quot;Kallie Will Jr.&quot;,
                    &quot;email&quot;: &quot;tschinner@example.net&quot;,
                    &quot;tipo&quot;: &quot;Moderador&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Ativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:39.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:39.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 6,
                &quot;tag_name&quot;: &quot;nobis&quot;,
                &quot;is_moderator_only&quot;: 0,
                &quot;count&quot;: 12,
                &quot;description&quot;: &quot;Reprehenderit beatae est voluptatem eos est.&quot;,
                &quot;criador&quot;: 59,
                &quot;ultimo_editor&quot;: 60,
                &quot;created_at&quot;: &quot;2025-11-11T23:33:45.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-11-11T23:33:45.000000Z&quot;,
                &quot;status&quot;: &quot;Ativo&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: 59,
                    &quot;nome&quot;: &quot;Zakary Boehm&quot;,
                    &quot;email&quot;: &quot;tressie.hansen@example.net&quot;,
                    &quot;tipo&quot;: &quot;Aluno&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Ativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:39.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:39.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: 60,
                    &quot;nome&quot;: &quot;Alvena Rau II&quot;,
                    &quot;email&quot;: &quot;brice33@example.com&quot;,
                    &quot;tipo&quot;: &quot;ADM&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Inativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:39.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:39.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 7,
                &quot;tag_name&quot;: &quot;corporis&quot;,
                &quot;is_moderator_only&quot;: 0,
                &quot;count&quot;: 37756,
                &quot;description&quot;: &quot;Eveniet vitae amet doloremque explicabo explicabo at.&quot;,
                &quot;criador&quot;: 61,
                &quot;ultimo_editor&quot;: 62,
                &quot;created_at&quot;: &quot;2025-11-11T23:33:45.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-11-11T23:33:45.000000Z&quot;,
                &quot;status&quot;: &quot;Ativo&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: 61,
                    &quot;nome&quot;: &quot;Lori Runolfsson&quot;,
                    &quot;email&quot;: &quot;erobel@example.org&quot;,
                    &quot;tipo&quot;: &quot;Operador&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Ativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:40.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:40.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: 62,
                    &quot;nome&quot;: &quot;Vladimir McLaughlin III&quot;,
                    &quot;email&quot;: &quot;okon.chelsea@example.net&quot;,
                    &quot;tipo&quot;: &quot;ADM&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Bloqueado&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:40.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:40.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 8,
                &quot;tag_name&quot;: &quot;id&quot;,
                &quot;is_moderator_only&quot;: 1,
                &quot;count&quot;: 294040,
                &quot;description&quot;: &quot;Tempore quaerat qui exercitationem maxime.&quot;,
                &quot;criador&quot;: 63,
                &quot;ultimo_editor&quot;: 64,
                &quot;created_at&quot;: &quot;2025-11-11T23:33:45.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-11-11T23:33:45.000000Z&quot;,
                &quot;status&quot;: &quot;Ativo&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: 63,
                    &quot;nome&quot;: &quot;Bartholome Kihn&quot;,
                    &quot;email&quot;: &quot;watsica.timmy@example.org&quot;,
                    &quot;tipo&quot;: &quot;Operador&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Bloqueado&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:40.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:40.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: 64,
                    &quot;nome&quot;: &quot;Larry Stark&quot;,
                    &quot;email&quot;: &quot;ebahringer@example.net&quot;,
                    &quot;tipo&quot;: &quot;Operador&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Bloqueado&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:40.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:40.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 9,
                &quot;tag_name&quot;: &quot;repellat&quot;,
                &quot;is_moderator_only&quot;: 1,
                &quot;count&quot;: 4540,
                &quot;description&quot;: &quot;Laboriosam saepe quo ipsam dolore nulla.&quot;,
                &quot;criador&quot;: 65,
                &quot;ultimo_editor&quot;: 66,
                &quot;created_at&quot;: &quot;2025-11-11T23:33:45.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-11-11T23:33:45.000000Z&quot;,
                &quot;status&quot;: &quot;Ativo&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: 65,
                    &quot;nome&quot;: &quot;Gloria Friesen&quot;,
                    &quot;email&quot;: &quot;istokes@example.org&quot;,
                    &quot;tipo&quot;: &quot;Professor&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Inativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:40.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:40.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: 66,
                    &quot;nome&quot;: &quot;Mrs. Kelsi Daugherty DDS&quot;,
                    &quot;email&quot;: &quot;jasen91@example.net&quot;,
                    &quot;tipo&quot;: &quot;Aluno&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Ativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:41.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:41.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 10,
                &quot;tag_name&quot;: &quot;dicta&quot;,
                &quot;is_moderator_only&quot;: 0,
                &quot;count&quot;: 36,
                &quot;description&quot;: &quot;Cum aliquid tempora amet.&quot;,
                &quot;criador&quot;: 67,
                &quot;ultimo_editor&quot;: 68,
                &quot;created_at&quot;: &quot;2025-11-11T23:33:45.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-11-11T23:33:45.000000Z&quot;,
                &quot;status&quot;: &quot;Inativo&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: 67,
                    &quot;nome&quot;: &quot;Prof. Lazaro Hyatt&quot;,
                    &quot;email&quot;: &quot;wisoky.alva@example.net&quot;,
                    &quot;tipo&quot;: &quot;Moderador&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Ativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:41.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:41.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: 68,
                    &quot;nome&quot;: &quot;Hope Purdy&quot;,
                    &quot;email&quot;: &quot;kiana.breitenberg@example.com&quot;,
                    &quot;tipo&quot;: &quot;Operador&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Ativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:41.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:41.000000Z&quot;
                }
            }
        ],
        &quot;first_page_url&quot;: &quot;http://localhost:8000/api/tagsconteudo?page=1&quot;,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 3,
        &quot;last_page_url&quot;: &quot;http://localhost:8000/api/tagsconteudo?page=3&quot;,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;page&quot;: null,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/tagsconteudo?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;page&quot;: 1,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/tagsconteudo?page=2&quot;,
                &quot;label&quot;: &quot;2&quot;,
                &quot;page&quot;: 2,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/tagsconteudo?page=3&quot;,
                &quot;label&quot;: &quot;3&quot;,
                &quot;page&quot;: 3,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/tagsconteudo?page=2&quot;,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;page&quot;: 2,
                &quot;active&quot;: false
            }
        ],
        &quot;next_page_url&quot;: &quot;http://localhost:8000/api/tagsconteudo?page=2&quot;,
        &quot;path&quot;: &quot;http://localhost:8000/api/tagsconteudo&quot;,
        &quot;per_page&quot;: 10,
        &quot;prev_page_url&quot;: null,
        &quot;to&quot;: 10,
        &quot;total&quot;: 23
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-tagsconteudo" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-tagsconteudo"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-tagsconteudo"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-tagsconteudo" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-tagsconteudo">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-tagsconteudo" data-method="GET"
      data-path="api/tagsconteudo"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-tagsconteudo', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-tagsconteudo"
                    onclick="tryItOut('GETapi-tagsconteudo');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-tagsconteudo"
                    onclick="cancelTryOut('GETapi-tagsconteudo');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-tagsconteudo"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/tagsconteudo</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-tagsconteudo"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-tagsconteudo"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-questoes">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-questoes">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/questoes" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/questoes"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-questoes">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: {
        &quot;current_page&quot;: 1,
        &quot;data&quot;: [
            {
                &quot;id&quot;: 5,
                &quot;title&quot;: &quot;Quis totam quis non et.&quot;,
                &quot;content&quot;: &quot;Commodi sapiente ut dolorem voluptatibus qui nostrum. Sed nobis aut aut ducimus deserunt sequi rerum. Eveniet molestias fugit expedita facilis explicabo sunt molestiae.&quot;,
                &quot;correction&quot;: &quot;Sint sed voluptatibus quod praesentium aut molestiae rem. Enim et optio magnam provident vel iure voluptas. Porro in itaque quod veniam est non. Ea id optio consequatur ad.&quot;,
                &quot;materia&quot;: null,
                &quot;ultimo_editor&quot;: 225,
                &quot;criador&quot;: 226,
                &quot;type&quot;: &quot;Aberta&quot;,
                &quot;status&quot;: &quot;Inactive&quot;,
                &quot;created_at&quot;: &quot;2025-11-11T23:34:14.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-11-11T23:34:14.000000Z&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: 226,
                    &quot;nome&quot;: &quot;Kyleigh Hahn&quot;,
                    &quot;email&quot;: &quot;anya.hintz@example.com&quot;,
                    &quot;tipo&quot;: &quot;ADM&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Inativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:34:10.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:34:10.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: 225,
                    &quot;nome&quot;: &quot;Dr. Kayleigh Green IV&quot;,
                    &quot;email&quot;: &quot;joyce.mohr@example.net&quot;,
                    &quot;tipo&quot;: &quot;Moderador&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Bloqueado&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:34:10.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:34:10.000000Z&quot;
                },
                &quot;alternatives&quot;: [
                    {
                        &quot;id&quot;: 17,
                        &quot;question_id&quot;: 5,
                        &quot;content&quot;: &quot;Consectetur provident modi quo voluptatum.&quot;,
                        &quot;correct&quot;: 0,
                        &quot;criador&quot;: 281,
                        &quot;ultimo_editor&quot;: 282,
                        &quot;created_at&quot;: &quot;2025-11-11T23:34:21.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:34:21.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 18,
                        &quot;question_id&quot;: 5,
                        &quot;content&quot;: &quot;Eaque aut consequatur a est sit dolor.&quot;,
                        &quot;correct&quot;: 1,
                        &quot;criador&quot;: 283,
                        &quot;ultimo_editor&quot;: 284,
                        &quot;created_at&quot;: &quot;2025-11-11T23:34:21.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:34:21.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 19,
                        &quot;question_id&quot;: 5,
                        &quot;content&quot;: &quot;Ut qui doloribus officiis quia quia error ab sed.&quot;,
                        &quot;correct&quot;: 0,
                        &quot;criador&quot;: 285,
                        &quot;ultimo_editor&quot;: 286,
                        &quot;created_at&quot;: &quot;2025-11-11T23:34:21.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:34:21.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 20,
                        &quot;question_id&quot;: 5,
                        &quot;content&quot;: &quot;Temporibus sed et quis.&quot;,
                        &quot;correct&quot;: 0,
                        &quot;criador&quot;: 287,
                        &quot;ultimo_editor&quot;: 288,
                        &quot;created_at&quot;: &quot;2025-11-11T23:34:21.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:34:21.000000Z&quot;
                    }
                ]
            },
            {
                &quot;id&quot;: 6,
                &quot;title&quot;: &quot;Est velit rerum ut quo.&quot;,
                &quot;content&quot;: &quot;Aliquam iste quia explicabo at. Corporis nesciunt quia ut fuga id atque id. Molestiae nemo explicabo cumque voluptate deserunt voluptatem. Reiciendis velit nobis in sit.&quot;,
                &quot;correction&quot;: &quot;Non ducimus est velit voluptas veritatis. Voluptatum illum iusto incidunt numquam.&quot;,
                &quot;materia&quot;: null,
                &quot;ultimo_editor&quot;: 229,
                &quot;criador&quot;: 230,
                &quot;type&quot;: &quot;VerdadeiroFalso&quot;,
                &quot;status&quot;: &quot;Active&quot;,
                &quot;created_at&quot;: &quot;2025-11-11T23:34:14.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-11-11T23:34:14.000000Z&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: 230,
                    &quot;nome&quot;: &quot;Webster Bogan&quot;,
                    &quot;email&quot;: &quot;emard.maurine@example.net&quot;,
                    &quot;tipo&quot;: &quot;Professor&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Inativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:34:10.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:34:10.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: 229,
                    &quot;nome&quot;: &quot;Prof. Kirk Klocko&quot;,
                    &quot;email&quot;: &quot;vsipes@example.org&quot;,
                    &quot;tipo&quot;: &quot;Moderador&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Ativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:34:10.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:34:10.000000Z&quot;
                },
                &quot;alternatives&quot;: [
                    {
                        &quot;id&quot;: 21,
                        &quot;question_id&quot;: 6,
                        &quot;content&quot;: &quot;Incidunt adipisci ratione est saepe culpa repellendus.&quot;,
                        &quot;correct&quot;: 1,
                        &quot;criador&quot;: 289,
                        &quot;ultimo_editor&quot;: 290,
                        &quot;created_at&quot;: &quot;2025-11-11T23:34:22.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:34:22.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 22,
                        &quot;question_id&quot;: 6,
                        &quot;content&quot;: &quot;Totam architecto mollitia explicabo hic.&quot;,
                        &quot;correct&quot;: 0,
                        &quot;criador&quot;: 291,
                        &quot;ultimo_editor&quot;: 292,
                        &quot;created_at&quot;: &quot;2025-11-11T23:34:22.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:34:22.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 23,
                        &quot;question_id&quot;: 6,
                        &quot;content&quot;: &quot;Illum cum dolor ab perspiciatis dolores sit quo.&quot;,
                        &quot;correct&quot;: 0,
                        &quot;criador&quot;: 293,
                        &quot;ultimo_editor&quot;: 294,
                        &quot;created_at&quot;: &quot;2025-11-11T23:34:23.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:34:23.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 24,
                        &quot;question_id&quot;: 6,
                        &quot;content&quot;: &quot;Aut molestias soluta fugiat maiores iste.&quot;,
                        &quot;correct&quot;: 0,
                        &quot;criador&quot;: 295,
                        &quot;ultimo_editor&quot;: 296,
                        &quot;created_at&quot;: &quot;2025-11-11T23:34:23.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:34:23.000000Z&quot;
                    }
                ]
            },
            {
                &quot;id&quot;: 7,
                &quot;title&quot;: &quot;Veritatis quia enim at suscipit.&quot;,
                &quot;content&quot;: &quot;Similique enim quaerat optio molestiae nam fugiat qui accusamus. Voluptas reiciendis fugiat pariatur cupiditate id. Expedita aperiam rem aut. Tempore voluptas quaerat cumque voluptas qui.&quot;,
                &quot;correction&quot;: &quot;Eum eum possimus corporis cupiditate impedit. Minus aspernatur commodi impedit voluptatibus deleniti adipisci. Dolorum doloribus corporis aliquid fugiat officia dolorem. Recusandae magnam aliquam quam inventore.&quot;,
                &quot;materia&quot;: null,
                &quot;ultimo_editor&quot;: 233,
                &quot;criador&quot;: 234,
                &quot;type&quot;: &quot;Aberta&quot;,
                &quot;status&quot;: &quot;Active&quot;,
                &quot;created_at&quot;: &quot;2025-11-11T23:34:14.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-11-11T23:34:14.000000Z&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: 234,
                    &quot;nome&quot;: &quot;Maymie Mante&quot;,
                    &quot;email&quot;: &quot;goyette.hildegard@example.com&quot;,
                    &quot;tipo&quot;: &quot;Moderador&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Inativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:34:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:34:11.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: 233,
                    &quot;nome&quot;: &quot;Dr. Roberto Ferry&quot;,
                    &quot;email&quot;: &quot;michelle.schaefer@example.com&quot;,
                    &quot;tipo&quot;: &quot;Operador&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Ativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:34:11.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:34:11.000000Z&quot;
                },
                &quot;alternatives&quot;: [
                    {
                        &quot;id&quot;: 25,
                        &quot;question_id&quot;: 7,
                        &quot;content&quot;: &quot;Aut at distinctio libero mollitia aut eaque aut accusamus.&quot;,
                        &quot;correct&quot;: 0,
                        &quot;criador&quot;: 297,
                        &quot;ultimo_editor&quot;: 298,
                        &quot;created_at&quot;: &quot;2025-11-11T23:34:24.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:34:24.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 26,
                        &quot;question_id&quot;: 7,
                        &quot;content&quot;: &quot;Distinctio provident earum ut consectetur aut voluptatum maiores.&quot;,
                        &quot;correct&quot;: 0,
                        &quot;criador&quot;: 299,
                        &quot;ultimo_editor&quot;: 300,
                        &quot;created_at&quot;: &quot;2025-11-11T23:34:24.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:34:24.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 27,
                        &quot;question_id&quot;: 7,
                        &quot;content&quot;: &quot;Et dicta aliquid provident veritatis maiores similique.&quot;,
                        &quot;correct&quot;: 0,
                        &quot;criador&quot;: 301,
                        &quot;ultimo_editor&quot;: 302,
                        &quot;created_at&quot;: &quot;2025-11-11T23:34:24.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:34:24.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 28,
                        &quot;question_id&quot;: 7,
                        &quot;content&quot;: &quot;Fugit impedit repellendus repellendus vel totam repudiandae ut molestias.&quot;,
                        &quot;correct&quot;: 1,
                        &quot;criador&quot;: 303,
                        &quot;ultimo_editor&quot;: 304,
                        &quot;created_at&quot;: &quot;2025-11-11T23:34:24.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:34:24.000000Z&quot;
                    }
                ]
            },
            {
                &quot;id&quot;: 8,
                &quot;title&quot;: &quot;Expedita soluta ut numquam.&quot;,
                &quot;content&quot;: &quot;Placeat error sed minus doloribus perferendis sunt cum. Praesentium et ducimus sequi recusandae temporibus aut.&quot;,
                &quot;correction&quot;: &quot;Iste sequi modi eum nostrum occaecati dolorum vel aut. Magnam et et aut aut reprehenderit. Quia unde est placeat consectetur qui recusandae quo sint.&quot;,
                &quot;materia&quot;: null,
                &quot;ultimo_editor&quot;: 237,
                &quot;criador&quot;: 238,
                &quot;type&quot;: &quot;Multipla&quot;,
                &quot;status&quot;: &quot;Inactive&quot;,
                &quot;created_at&quot;: &quot;2025-11-11T23:34:14.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-11-11T23:34:14.000000Z&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: 238,
                    &quot;nome&quot;: &quot;Kaley Hamill&quot;,
                    &quot;email&quot;: &quot;crist.warren@example.com&quot;,
                    &quot;tipo&quot;: &quot;Aluno&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Inativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:34:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:34:12.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: 237,
                    &quot;nome&quot;: &quot;Jevon Batz&quot;,
                    &quot;email&quot;: &quot;johathan.wehner@example.com&quot;,
                    &quot;tipo&quot;: &quot;Moderador&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Ativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:34:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:34:12.000000Z&quot;
                },
                &quot;alternatives&quot;: [
                    {
                        &quot;id&quot;: 29,
                        &quot;question_id&quot;: 8,
                        &quot;content&quot;: &quot;Nihil et adipisci quae libero eum sunt.&quot;,
                        &quot;correct&quot;: 1,
                        &quot;criador&quot;: 305,
                        &quot;ultimo_editor&quot;: 306,
                        &quot;created_at&quot;: &quot;2025-11-11T23:34:25.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:34:25.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 30,
                        &quot;question_id&quot;: 8,
                        &quot;content&quot;: &quot;Tempora veritatis nam explicabo ex porro suscipit velit iure.&quot;,
                        &quot;correct&quot;: 0,
                        &quot;criador&quot;: 307,
                        &quot;ultimo_editor&quot;: 308,
                        &quot;created_at&quot;: &quot;2025-11-11T23:34:25.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:34:25.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 31,
                        &quot;question_id&quot;: 8,
                        &quot;content&quot;: &quot;In qui ducimus sunt qui.&quot;,
                        &quot;correct&quot;: 0,
                        &quot;criador&quot;: 309,
                        &quot;ultimo_editor&quot;: 310,
                        &quot;created_at&quot;: &quot;2025-11-11T23:34:25.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:34:25.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 32,
                        &quot;question_id&quot;: 8,
                        &quot;content&quot;: &quot;Porro dolore iste quidem recusandae quas ducimus voluptatem.&quot;,
                        &quot;correct&quot;: 1,
                        &quot;criador&quot;: 311,
                        &quot;ultimo_editor&quot;: 312,
                        &quot;created_at&quot;: &quot;2025-11-11T23:34:25.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:34:25.000000Z&quot;
                    }
                ]
            },
            {
                &quot;id&quot;: 9,
                &quot;title&quot;: &quot;Magni placeat qui deserunt aut velit.&quot;,
                &quot;content&quot;: &quot;Corrupti doloribus eum explicabo labore eos officiis. Eius suscipit est fugit suscipit illum delectus eos.&quot;,
                &quot;correction&quot;: &quot;Molestiae nostrum aut fugiat id non non. Quo rerum vero voluptatem nihil voluptas ad. Unde voluptas dolorem facere. Commodi quia reprehenderit qui ex aliquam officiis.&quot;,
                &quot;materia&quot;: null,
                &quot;ultimo_editor&quot;: 241,
                &quot;criador&quot;: 242,
                &quot;type&quot;: &quot;VerdadeiroFalso&quot;,
                &quot;status&quot;: &quot;Inactive&quot;,
                &quot;created_at&quot;: &quot;2025-11-11T23:34:14.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-11-11T23:34:14.000000Z&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: 242,
                    &quot;nome&quot;: &quot;Thea Pollich Jr.&quot;,
                    &quot;email&quot;: &quot;shanie97@example.org&quot;,
                    &quot;tipo&quot;: &quot;Moderador&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Inativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:34:13.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:34:13.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: 241,
                    &quot;nome&quot;: &quot;Miss Dominique Hamill DVM&quot;,
                    &quot;email&quot;: &quot;reynolds.gustave@example.net&quot;,
                    &quot;tipo&quot;: &quot;Operador&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Inativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:34:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:34:12.000000Z&quot;
                },
                &quot;alternatives&quot;: [
                    {
                        &quot;id&quot;: 33,
                        &quot;question_id&quot;: 9,
                        &quot;content&quot;: &quot;Quisquam impedit qui laboriosam repudiandae.&quot;,
                        &quot;correct&quot;: 0,
                        &quot;criador&quot;: 313,
                        &quot;ultimo_editor&quot;: 314,
                        &quot;created_at&quot;: &quot;2025-11-11T23:34:27.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:34:27.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 34,
                        &quot;question_id&quot;: 9,
                        &quot;content&quot;: &quot;Corrupti nostrum ut quis ex.&quot;,
                        &quot;correct&quot;: 0,
                        &quot;criador&quot;: 315,
                        &quot;ultimo_editor&quot;: 316,
                        &quot;created_at&quot;: &quot;2025-11-11T23:34:27.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:34:27.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 35,
                        &quot;question_id&quot;: 9,
                        &quot;content&quot;: &quot;Enim consectetur qui laborum excepturi ducimus.&quot;,
                        &quot;correct&quot;: 1,
                        &quot;criador&quot;: 317,
                        &quot;ultimo_editor&quot;: 318,
                        &quot;created_at&quot;: &quot;2025-11-11T23:34:27.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:34:27.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 36,
                        &quot;question_id&quot;: 9,
                        &quot;content&quot;: &quot;Dolorem sit dicta officia qui molestias.&quot;,
                        &quot;correct&quot;: 1,
                        &quot;criador&quot;: 319,
                        &quot;ultimo_editor&quot;: 320,
                        &quot;created_at&quot;: &quot;2025-11-11T23:34:27.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:34:27.000000Z&quot;
                    }
                ]
            },
            {
                &quot;id&quot;: 10,
                &quot;title&quot;: &quot;Quo qui dolorem nihil ullam.&quot;,
                &quot;content&quot;: &quot;Porro soluta et dolore voluptatum sapiente. Consequatur dolorum cumque omnis esse. Aliquid modi voluptatibus vero non nihil ut sunt. Praesentium quisquam dolores sapiente nesciunt in est sed.&quot;,
                &quot;correction&quot;: &quot;Voluptas et dignissimos quia doloribus voluptas dolor provident. Culpa qui nihil vel numquam libero. Voluptatem vel saepe soluta modi laboriosam.&quot;,
                &quot;materia&quot;: null,
                &quot;ultimo_editor&quot;: 245,
                &quot;criador&quot;: 246,
                &quot;type&quot;: &quot;VerdadeiroFalso&quot;,
                &quot;status&quot;: &quot;Inactive&quot;,
                &quot;created_at&quot;: &quot;2025-11-11T23:34:14.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-11-11T23:34:14.000000Z&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: 246,
                    &quot;nome&quot;: &quot;Prof. Joany Gibson Sr.&quot;,
                    &quot;email&quot;: &quot;melvin.gaylord@example.com&quot;,
                    &quot;tipo&quot;: &quot;Professor&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Ativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:34:13.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:34:13.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: 245,
                    &quot;nome&quot;: &quot;Anissa King&quot;,
                    &quot;email&quot;: &quot;zschmeler@example.net&quot;,
                    &quot;tipo&quot;: &quot;Operador&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Bloqueado&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:34:13.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:34:13.000000Z&quot;
                },
                &quot;alternatives&quot;: [
                    {
                        &quot;id&quot;: 37,
                        &quot;question_id&quot;: 10,
                        &quot;content&quot;: &quot;Sequi molestias eveniet voluptatibus iure est in mollitia.&quot;,
                        &quot;correct&quot;: 0,
                        &quot;criador&quot;: 321,
                        &quot;ultimo_editor&quot;: 322,
                        &quot;created_at&quot;: &quot;2025-11-11T23:34:28.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:34:28.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 38,
                        &quot;question_id&quot;: 10,
                        &quot;content&quot;: &quot;Libero est praesentium ratione asperiores.&quot;,
                        &quot;correct&quot;: 1,
                        &quot;criador&quot;: 323,
                        &quot;ultimo_editor&quot;: 324,
                        &quot;created_at&quot;: &quot;2025-11-11T23:34:28.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:34:28.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 39,
                        &quot;question_id&quot;: 10,
                        &quot;content&quot;: &quot;Autem corporis vero vel sunt optio et aut.&quot;,
                        &quot;correct&quot;: 0,
                        &quot;criador&quot;: 325,
                        &quot;ultimo_editor&quot;: 326,
                        &quot;created_at&quot;: &quot;2025-11-11T23:34:28.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:34:28.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 40,
                        &quot;question_id&quot;: 10,
                        &quot;content&quot;: &quot;Consequatur ut facilis enim minus aspernatur.&quot;,
                        &quot;correct&quot;: 1,
                        &quot;criador&quot;: 327,
                        &quot;ultimo_editor&quot;: 328,
                        &quot;created_at&quot;: &quot;2025-11-11T23:34:28.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:34:28.000000Z&quot;
                    }
                ]
            },
            {
                &quot;id&quot;: 11,
                &quot;title&quot;: &quot;Non qui in pariatur aliquid modi.&quot;,
                &quot;content&quot;: &quot;Est vitae qui quis dignissimos maiores. Sit laboriosam natus quo accusamus harum. Quia aspernatur dicta quia iste non soluta et. Sapiente quaerat nostrum et et veritatis impedit quis.&quot;,
                &quot;correction&quot;: &quot;Repellat autem eos autem quos qui fugit. Fuga omnis rem similique. Quidem ad et temporibus eum recusandae laudantium. Eos soluta quos fuga itaque.&quot;,
                &quot;materia&quot;: null,
                &quot;ultimo_editor&quot;: 338,
                &quot;criador&quot;: 339,
                &quot;type&quot;: &quot;Multipla&quot;,
                &quot;status&quot;: &quot;Inactive&quot;,
                &quot;created_at&quot;: &quot;2025-11-11T23:34:36.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-11-11T23:34:36.000000Z&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: 339,
                    &quot;nome&quot;: &quot;Era Hegmann&quot;,
                    &quot;email&quot;: &quot;gaylord.zemlak@example.net&quot;,
                    &quot;tipo&quot;: &quot;Professor&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Bloqueado&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:34:30.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:34:30.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: 338,
                    &quot;nome&quot;: &quot;Alysa Feil III&quot;,
                    &quot;email&quot;: &quot;beier.andreane@example.org&quot;,
                    &quot;tipo&quot;: &quot;Operador&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Inativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:34:30.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:34:30.000000Z&quot;
                },
                &quot;alternatives&quot;: [
                    {
                        &quot;id&quot;: 41,
                        &quot;question_id&quot;: 11,
                        &quot;content&quot;: &quot;Adipisci pariatur alias exercitationem.&quot;,
                        &quot;correct&quot;: 1,
                        &quot;criador&quot;: 374,
                        &quot;ultimo_editor&quot;: 375,
                        &quot;created_at&quot;: &quot;2025-11-11T23:34:38.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:34:38.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 42,
                        &quot;question_id&quot;: 11,
                        &quot;content&quot;: &quot;Consequatur quam id voluptatum.&quot;,
                        &quot;correct&quot;: 1,
                        &quot;criador&quot;: 376,
                        &quot;ultimo_editor&quot;: 377,
                        &quot;created_at&quot;: &quot;2025-11-11T23:34:38.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:34:38.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 43,
                        &quot;question_id&quot;: 11,
                        &quot;content&quot;: &quot;Aut ut dolores dolorem dolorum laboriosam.&quot;,
                        &quot;correct&quot;: 0,
                        &quot;criador&quot;: 378,
                        &quot;ultimo_editor&quot;: 379,
                        &quot;created_at&quot;: &quot;2025-11-11T23:34:38.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:34:38.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 44,
                        &quot;question_id&quot;: 11,
                        &quot;content&quot;: &quot;Minima numquam dolore sint veritatis perspiciatis explicabo.&quot;,
                        &quot;correct&quot;: 1,
                        &quot;criador&quot;: 380,
                        &quot;ultimo_editor&quot;: 381,
                        &quot;created_at&quot;: &quot;2025-11-11T23:34:38.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:34:38.000000Z&quot;
                    }
                ]
            },
            {
                &quot;id&quot;: 12,
                &quot;title&quot;: &quot;Rerum libero omnis sit et enim fugiat.&quot;,
                &quot;content&quot;: &quot;Ea id et iusto tempore. Vitae maxime dolore exercitationem ex eum.&quot;,
                &quot;correction&quot;: &quot;Ut amet rerum accusantium placeat aut et minus. Hic facere recusandae numquam sed et aut numquam quisquam. Sed laudantium commodi aut aut.&quot;,
                &quot;materia&quot;: null,
                &quot;ultimo_editor&quot;: 342,
                &quot;criador&quot;: 343,
                &quot;type&quot;: &quot;Multipla&quot;,
                &quot;status&quot;: &quot;Inactive&quot;,
                &quot;created_at&quot;: &quot;2025-11-11T23:34:36.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-11-11T23:34:36.000000Z&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: 343,
                    &quot;nome&quot;: &quot;Joel Gleichner&quot;,
                    &quot;email&quot;: &quot;collins.frank@example.org&quot;,
                    &quot;tipo&quot;: &quot;Aluno&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Bloqueado&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:34:31.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:34:31.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: 342,
                    &quot;nome&quot;: &quot;Therese Macejkovic&quot;,
                    &quot;email&quot;: &quot;joaquin68@example.com&quot;,
                    &quot;tipo&quot;: &quot;Aluno&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Inativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:34:31.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:34:31.000000Z&quot;
                },
                &quot;alternatives&quot;: [
                    {
                        &quot;id&quot;: 45,
                        &quot;question_id&quot;: 12,
                        &quot;content&quot;: &quot;Et odit quod eum quo.&quot;,
                        &quot;correct&quot;: 1,
                        &quot;criador&quot;: 382,
                        &quot;ultimo_editor&quot;: 383,
                        &quot;created_at&quot;: &quot;2025-11-11T23:34:39.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:34:39.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 46,
                        &quot;question_id&quot;: 12,
                        &quot;content&quot;: &quot;Deserunt qui est excepturi non aut.&quot;,
                        &quot;correct&quot;: 1,
                        &quot;criador&quot;: 384,
                        &quot;ultimo_editor&quot;: 385,
                        &quot;created_at&quot;: &quot;2025-11-11T23:34:39.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:34:39.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 47,
                        &quot;question_id&quot;: 12,
                        &quot;content&quot;: &quot;Nihil sint iure soluta consequatur maxime.&quot;,
                        &quot;correct&quot;: 0,
                        &quot;criador&quot;: 386,
                        &quot;ultimo_editor&quot;: 387,
                        &quot;created_at&quot;: &quot;2025-11-11T23:34:39.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:34:39.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 48,
                        &quot;question_id&quot;: 12,
                        &quot;content&quot;: &quot;Quidem quia voluptatem nam ullam dolores nihil facilis.&quot;,
                        &quot;correct&quot;: 1,
                        &quot;criador&quot;: 388,
                        &quot;ultimo_editor&quot;: 389,
                        &quot;created_at&quot;: &quot;2025-11-11T23:34:39.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:34:39.000000Z&quot;
                    }
                ]
            },
            {
                &quot;id&quot;: 13,
                &quot;title&quot;: &quot;Aut quo ea debitis est ipsam perferendis itaque.&quot;,
                &quot;content&quot;: &quot;Quasi enim doloribus quaerat iure aut omnis similique a. Enim impedit odit totam omnis in. Enim fugit id rerum sequi expedita suscipit. Eos laboriosam porro quos similique ut aut ipsam.&quot;,
                &quot;correction&quot;: &quot;Accusantium fugit possimus quas. Ratione incidunt occaecati quo sit. Eum et eveniet quidem odio ducimus distinctio non. Non vel aut ratione cumque rem.&quot;,
                &quot;materia&quot;: null,
                &quot;ultimo_editor&quot;: 346,
                &quot;criador&quot;: 347,
                &quot;type&quot;: &quot;Aberta&quot;,
                &quot;status&quot;: &quot;Inactive&quot;,
                &quot;created_at&quot;: &quot;2025-11-11T23:34:36.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-11-11T23:34:36.000000Z&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: 347,
                    &quot;nome&quot;: &quot;Morton Schinner III&quot;,
                    &quot;email&quot;: &quot;barrows.marques@example.com&quot;,
                    &quot;tipo&quot;: &quot;Operador&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Bloqueado&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:34:32.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:34:32.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: 346,
                    &quot;nome&quot;: &quot;Gwendolyn Wisoky&quot;,
                    &quot;email&quot;: &quot;adams.abdul@example.com&quot;,
                    &quot;tipo&quot;: &quot;Moderador&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Ativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:34:32.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:34:32.000000Z&quot;
                },
                &quot;alternatives&quot;: [
                    {
                        &quot;id&quot;: 49,
                        &quot;question_id&quot;: 13,
                        &quot;content&quot;: &quot;Itaque nesciunt amet modi.&quot;,
                        &quot;correct&quot;: 0,
                        &quot;criador&quot;: 390,
                        &quot;ultimo_editor&quot;: 391,
                        &quot;created_at&quot;: &quot;2025-11-11T23:34:41.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:34:41.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 50,
                        &quot;question_id&quot;: 13,
                        &quot;content&quot;: &quot;Sit animi eligendi doloremque dolore qui autem.&quot;,
                        &quot;correct&quot;: 0,
                        &quot;criador&quot;: 392,
                        &quot;ultimo_editor&quot;: 393,
                        &quot;created_at&quot;: &quot;2025-11-11T23:34:41.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:34:41.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 51,
                        &quot;question_id&quot;: 13,
                        &quot;content&quot;: &quot;Eius ipsum quisquam possimus sit enim saepe.&quot;,
                        &quot;correct&quot;: 1,
                        &quot;criador&quot;: 394,
                        &quot;ultimo_editor&quot;: 395,
                        &quot;created_at&quot;: &quot;2025-11-11T23:34:41.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:34:41.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 52,
                        &quot;question_id&quot;: 13,
                        &quot;content&quot;: &quot;Ut error aliquid laborum necessitatibus doloribus voluptates.&quot;,
                        &quot;correct&quot;: 1,
                        &quot;criador&quot;: 396,
                        &quot;ultimo_editor&quot;: 397,
                        &quot;created_at&quot;: &quot;2025-11-11T23:34:41.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:34:41.000000Z&quot;
                    }
                ]
            },
            {
                &quot;id&quot;: 14,
                &quot;title&quot;: &quot;Incidunt quia non illo dolores omnis et.&quot;,
                &quot;content&quot;: &quot;Et dolores necessitatibus ducimus iste accusantium. Nesciunt et itaque eveniet quia consequatur optio. Aut nostrum architecto libero eaque atque.&quot;,
                &quot;correction&quot;: &quot;Odit vitae neque qui repudiandae sunt tenetur. Ullam eveniet rerum aut aut. Cumque voluptas autem qui amet porro eligendi.&quot;,
                &quot;materia&quot;: null,
                &quot;ultimo_editor&quot;: 350,
                &quot;criador&quot;: 351,
                &quot;type&quot;: &quot;Multipla&quot;,
                &quot;status&quot;: &quot;Active&quot;,
                &quot;created_at&quot;: &quot;2025-11-11T23:34:37.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-11-11T23:34:37.000000Z&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: 351,
                    &quot;nome&quot;: &quot;Mikayla Berge&quot;,
                    &quot;email&quot;: &quot;schumm.bradley@example.net&quot;,
                    &quot;tipo&quot;: &quot;Operador&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Bloqueado&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:34:32.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:34:32.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: 350,
                    &quot;nome&quot;: &quot;Miss Maryse Lesch Jr.&quot;,
                    &quot;email&quot;: &quot;rgreen@example.com&quot;,
                    &quot;tipo&quot;: &quot;Operador&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Bloqueado&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:34:32.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:34:32.000000Z&quot;
                },
                &quot;alternatives&quot;: [
                    {
                        &quot;id&quot;: 53,
                        &quot;question_id&quot;: 14,
                        &quot;content&quot;: &quot;Dolores omnis blanditiis aperiam quibusdam corporis.&quot;,
                        &quot;correct&quot;: 0,
                        &quot;criador&quot;: 398,
                        &quot;ultimo_editor&quot;: 399,
                        &quot;created_at&quot;: &quot;2025-11-11T23:34:42.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:34:42.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 54,
                        &quot;question_id&quot;: 14,
                        &quot;content&quot;: &quot;Est eligendi eius alias temporibus sint ducimus et est.&quot;,
                        &quot;correct&quot;: 1,
                        &quot;criador&quot;: 400,
                        &quot;ultimo_editor&quot;: 401,
                        &quot;created_at&quot;: &quot;2025-11-11T23:34:42.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:34:42.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 55,
                        &quot;question_id&quot;: 14,
                        &quot;content&quot;: &quot;Voluptates ut et dicta sit.&quot;,
                        &quot;correct&quot;: 0,
                        &quot;criador&quot;: 402,
                        &quot;ultimo_editor&quot;: 403,
                        &quot;created_at&quot;: &quot;2025-11-11T23:34:42.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:34:42.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 56,
                        &quot;question_id&quot;: 14,
                        &quot;content&quot;: &quot;Autem nemo qui architecto veritatis alias nam et nobis.&quot;,
                        &quot;correct&quot;: 1,
                        &quot;criador&quot;: 404,
                        &quot;ultimo_editor&quot;: 405,
                        &quot;created_at&quot;: &quot;2025-11-11T23:34:42.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:34:42.000000Z&quot;
                    }
                ]
            }
        ],
        &quot;first_page_url&quot;: &quot;http://localhost:8000/api/questoes?page=1&quot;,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 14,
        &quot;last_page_url&quot;: &quot;http://localhost:8000/api/questoes?page=14&quot;,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;page&quot;: null,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/questoes?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;page&quot;: 1,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/questoes?page=2&quot;,
                &quot;label&quot;: &quot;2&quot;,
                &quot;page&quot;: 2,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/questoes?page=3&quot;,
                &quot;label&quot;: &quot;3&quot;,
                &quot;page&quot;: 3,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/questoes?page=4&quot;,
                &quot;label&quot;: &quot;4&quot;,
                &quot;page&quot;: 4,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/questoes?page=5&quot;,
                &quot;label&quot;: &quot;5&quot;,
                &quot;page&quot;: 5,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/questoes?page=6&quot;,
                &quot;label&quot;: &quot;6&quot;,
                &quot;page&quot;: 6,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/questoes?page=7&quot;,
                &quot;label&quot;: &quot;7&quot;,
                &quot;page&quot;: 7,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/questoes?page=8&quot;,
                &quot;label&quot;: &quot;8&quot;,
                &quot;page&quot;: 8,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/questoes?page=9&quot;,
                &quot;label&quot;: &quot;9&quot;,
                &quot;page&quot;: 9,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/questoes?page=10&quot;,
                &quot;label&quot;: &quot;10&quot;,
                &quot;page&quot;: 10,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;...&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/questoes?page=13&quot;,
                &quot;label&quot;: &quot;13&quot;,
                &quot;page&quot;: 13,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/questoes?page=14&quot;,
                &quot;label&quot;: &quot;14&quot;,
                &quot;page&quot;: 14,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/questoes?page=2&quot;,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;page&quot;: 2,
                &quot;active&quot;: false
            }
        ],
        &quot;next_page_url&quot;: &quot;http://localhost:8000/api/questoes?page=2&quot;,
        &quot;path&quot;: &quot;http://localhost:8000/api/questoes&quot;,
        &quot;per_page&quot;: 10,
        &quot;prev_page_url&quot;: null,
        &quot;to&quot;: 10,
        &quot;total&quot;: 138
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-questoes" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-questoes"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-questoes"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-questoes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-questoes">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-questoes" data-method="GET"
      data-path="api/questoes"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-questoes', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-questoes"
                    onclick="tryItOut('GETapi-questoes');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-questoes"
                    onclick="cancelTryOut('GETapi-questoes');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-questoes"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/questoes</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-questoes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-questoes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-questoescolecao">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-questoescolecao">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/questoescolecao" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/questoescolecao"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-questoescolecao">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Cole&ccedil;&atilde;o carregada com sucesso&quot;,
    &quot;data&quot;: {
        &quot;current_page&quot;: 1,
        &quot;data&quot;: [
            {
                &quot;id&quot;: 2,
                &quot;title&quot;: &quot;Simulado - Fisica&quot;,
                &quot;description&quot;: &quot;&lt;p&gt;Aut repellat iure nemo vel beatae. Non aut mollitia officiis nobis reprehenderit natus. Quasi voluptatem cupiditate tempore fugiat est hic.&lt;/p&gt;&quot;,
                &quot;subject_id&quot;: 32,
                &quot;type&quot;: &quot;Simulation&quot;,
                &quot;due_date&quot;: &quot;2025-12-08T00:00:00.000000Z&quot;,
                &quot;created_by&quot;: {
                    &quot;id&quot;: 332,
                    &quot;nome&quot;: &quot;Dr. Daryl Schroeder&quot;,
                    &quot;email&quot;: &quot;schamberger.maximillian@example.org&quot;,
                    &quot;tipo&quot;: &quot;Moderador&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Bloqueado&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:34:29.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:34:29.000000Z&quot;
                },
                &quot;updated_by&quot;: {
                    &quot;id&quot;: 1,
                    &quot;nome&quot;: &quot;Administrador&quot;,
                    &quot;email&quot;: &quot;admin@mesominds.com&quot;,
                    &quot;tipo&quot;: &quot;ADM&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Ativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:33:29.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:33:29.000000Z&quot;
                },
                &quot;status&quot;: &quot;Active&quot;,
                &quot;created_at&quot;: &quot;2025-11-11T23:34:30.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-11-12T03:10:01.000000Z&quot;,
                &quot;questions&quot;: [
                    {
                        &quot;id&quot;: 20,
                        &quot;title&quot;: &quot;Nostrum perferendis repudiandae debitis consequuntur quam possimus.&quot;,
                        &quot;content&quot;: &quot;Fugiat qui asperiores tempore magni sunt ut. Voluptas qui molestiae asperiores nam omnis id doloremque. Aut fugiat quam quis est excepturi. Ut ratione sed qui cumque et est.&quot;,
                        &quot;correction&quot;: &quot;Natus aperiam est sint minima consequatur aperiam dolores. Animi suscipit quia sit. Distinctio architecto corporis quidem. Minus excepturi repellat odit et id ratione et.&quot;,
                        &quot;materia&quot;: 43,
                        &quot;ultimo_editor&quot;: 1,
                        &quot;criador&quot;: 447,
                        &quot;type&quot;: &quot;Aberta&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-11-11T23:34:56.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-12T03:10:01.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 2,
                            &quot;question_id&quot;: 20,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 1,
                            &quot;created_by&quot;: 1,
                            &quot;updated_by&quot;: 1,
                            &quot;created_at&quot;: &quot;2025-11-12T03:10:01.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-11-12T03:10:01.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 21,
                        &quot;title&quot;: &quot;Suscipit reprehenderit quam ut iste.&quot;,
                        &quot;content&quot;: &quot;Ab rerum voluptates velit incidunt. Eaque numquam veritatis aspernatur eius quasi assumenda aut ipsa. Neque enim asperiores eos omnis pariatur.&quot;,
                        &quot;correction&quot;: &quot;Qui veritatis est quo dignissimos laudantium voluptate ex. Beatae minima qui suscipit qui vel temporibus minus. In quisquam necessitatibus qui voluptatem delectus omnis.&quot;,
                        &quot;materia&quot;: 44,
                        &quot;ultimo_editor&quot;: 1,
                        &quot;criador&quot;: 451,
                        &quot;type&quot;: &quot;Multipla&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-11-11T23:34:56.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-12T03:10:01.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 2,
                            &quot;question_id&quot;: 21,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 2,
                            &quot;created_by&quot;: 1,
                            &quot;updated_by&quot;: 1,
                            &quot;created_at&quot;: &quot;2025-11-12T03:10:01.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-11-12T03:10:01.000000Z&quot;
                        }
                    }
                ]
            },
            {
                &quot;id&quot;: 3,
                &quot;title&quot;: &quot;Simulado - illo&quot;,
                &quot;description&quot;: &quot;Autem ad rerum voluptates excepturi. Molestias voluptatum fugiat et molestiae et ipsam. Unde neque voluptatem odit temporibus.&quot;,
                &quot;subject_id&quot;: 33,
                &quot;type&quot;: &quot;Simulation&quot;,
                &quot;due_date&quot;: &quot;2025-12-04T19:48:07.000000Z&quot;,
                &quot;created_by&quot;: {
                    &quot;id&quot;: 335,
                    &quot;nome&quot;: &quot;Alejandra Brekke&quot;,
                    &quot;email&quot;: &quot;ulynch@example.net&quot;,
                    &quot;tipo&quot;: &quot;Operador&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Inativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:34:30.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:34:30.000000Z&quot;
                },
                &quot;updated_by&quot;: {
                    &quot;id&quot;: 335,
                    &quot;nome&quot;: &quot;Alejandra Brekke&quot;,
                    &quot;email&quot;: &quot;ulynch@example.net&quot;,
                    &quot;tipo&quot;: &quot;Operador&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Inativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:34:30.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:34:30.000000Z&quot;
                },
                &quot;status&quot;: &quot;Inactive&quot;,
                &quot;created_at&quot;: &quot;2025-11-11T23:34:30.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-11-11T23:34:30.000000Z&quot;,
                &quot;questions&quot;: [
                    {
                        &quot;id&quot;: 33,
                        &quot;title&quot;: &quot;Saepe voluptas ex voluptas vel dolorem.&quot;,
                        &quot;content&quot;: &quot;Mollitia quo ipsam ea ut sed. Possimus aliquid est ipsa impedit. Omnis velit provident nam consectetur. Illo fugiat consequatur quo et.&quot;,
                        &quot;correction&quot;: &quot;Ut itaque sed mollitia minima suscipit explicabo atque qui. Aut est eaque architecto necessitatibus facere et. Delectus voluptate nisi labore quod porro quod voluptatem vel.&quot;,
                        &quot;materia&quot;: 56,
                        &quot;ultimo_editor&quot;: 570,
                        &quot;criador&quot;: 571,
                        &quot;type&quot;: &quot;Aberta&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-11-11T23:35:16.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:35:16.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 3,
                            &quot;question_id&quot;: 33,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 5,
                            &quot;created_by&quot;: 335,
                            &quot;updated_by&quot;: 335,
                            &quot;created_at&quot;: &quot;2025-11-11T23:35:29.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-11-11T23:35:29.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 36,
                        &quot;title&quot;: &quot;Blanditiis dolorem ipsum ex qui ut dolorum quia.&quot;,
                        &quot;content&quot;: &quot;Voluptatem corrupti exercitationem rerum. Debitis quisquam ut eum quibusdam a. Non consequatur vel perferendis. Corporis quod provident minus esse eligendi.&quot;,
                        &quot;correction&quot;: &quot;Quis omnis voluptatem ipsum necessitatibus eligendi. Id ex nam est. Distinctio nemo quia facere ea animi maxime veritatis ea. Voluptates voluptate expedita similique officia odio.&quot;,
                        &quot;materia&quot;: 59,
                        &quot;ultimo_editor&quot;: 582,
                        &quot;criador&quot;: 583,
                        &quot;type&quot;: &quot;VerdadeiroFalso&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-11-11T23:35:16.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:35:16.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 3,
                            &quot;question_id&quot;: 36,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 8,
                            &quot;created_by&quot;: 335,
                            &quot;updated_by&quot;: 335,
                            &quot;created_at&quot;: &quot;2025-11-11T23:35:29.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-11-11T23:35:29.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 37,
                        &quot;title&quot;: &quot;Exercitationem voluptate quos facere deleniti perspiciatis quibusdam quod dolor.&quot;,
                        &quot;content&quot;: &quot;Natus sint consequatur temporibus. Odio ut facere iure. Aut aut odio et dolorem repellendus est inventore dignissimos. Consequuntur est quibusdam sint occaecati. Sit officiis sequi qui at.&quot;,
                        &quot;correction&quot;: &quot;Et id aut qui omnis assumenda quam dolores. Quae odit voluptas quas ea. Dolor aperiam culpa odit facilis at.&quot;,
                        &quot;materia&quot;: 60,
                        &quot;ultimo_editor&quot;: 586,
                        &quot;criador&quot;: 587,
                        &quot;type&quot;: &quot;VerdadeiroFalso&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-11-11T23:35:16.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:35:16.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 3,
                            &quot;question_id&quot;: 37,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 9,
                            &quot;created_by&quot;: 335,
                            &quot;updated_by&quot;: 335,
                            &quot;created_at&quot;: &quot;2025-11-11T23:35:29.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-11-11T23:35:29.000000Z&quot;
                        }
                    }
                ]
            },
            {
                &quot;id&quot;: 4,
                &quot;title&quot;: &quot;Prova - dolores&quot;,
                &quot;description&quot;: &quot;Cum libero nulla eligendi quidem necessitatibus voluptas temporibus et. Provident a impedit voluptatem voluptas. Quia et expedita minus et.&quot;,
                &quot;subject_id&quot;: 61,
                &quot;type&quot;: &quot;Exam&quot;,
                &quot;due_date&quot;: &quot;2025-11-21T14:27:46.000000Z&quot;,
                &quot;created_by&quot;: {
                    &quot;id&quot;: 662,
                    &quot;nome&quot;: &quot;Roel Watsica&quot;,
                    &quot;email&quot;: &quot;asia70@example.com&quot;,
                    &quot;tipo&quot;: &quot;Operador&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Inativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:35:29.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:35:29.000000Z&quot;
                },
                &quot;updated_by&quot;: {
                    &quot;id&quot;: 662,
                    &quot;nome&quot;: &quot;Roel Watsica&quot;,
                    &quot;email&quot;: &quot;asia70@example.com&quot;,
                    &quot;tipo&quot;: &quot;Operador&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Inativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:35:29.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:35:29.000000Z&quot;
                },
                &quot;status&quot;: &quot;Inactive&quot;,
                &quot;created_at&quot;: &quot;2025-11-11T23:35:30.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-11-11T23:35:30.000000Z&quot;,
                &quot;questions&quot;: [
                    {
                        &quot;id&quot;: 39,
                        &quot;title&quot;: &quot;Magni maxime dolores non ad voluptatem neque.&quot;,
                        &quot;content&quot;: &quot;Consequatur aut molestias impedit aliquid non similique qui. Commodi porro velit eveniet atque consequatur. Sit cumque et rem est pariatur placeat rem.&quot;,
                        &quot;correction&quot;: &quot;Porro facilis suscipit non ex. Et cupiditate facere expedita. Consequatur omnis necessitatibus id non aliquid perspiciatis asperiores et.&quot;,
                        &quot;materia&quot;: 64,
                        &quot;ultimo_editor&quot;: 672,
                        &quot;criador&quot;: 673,
                        &quot;type&quot;: &quot;Aberta&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-11-11T23:35:43.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:35:43.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 4,
                            &quot;question_id&quot;: 39,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 2,
                            &quot;created_by&quot;: 662,
                            &quot;updated_by&quot;: 662,
                            &quot;created_at&quot;: &quot;2025-11-11T23:36:10.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-11-11T23:36:10.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 40,
                        &quot;title&quot;: &quot;Eos id autem molestias provident ut odio.&quot;,
                        &quot;content&quot;: &quot;Quo nulla iusto deserunt pariatur quia doloremque deserunt. Dolorem expedita et cum aperiam molestiae. Ut est repudiandae sunt. Aut rem et nostrum labore in quae. Consequuntur consectetur aut aut id vel tempore et id.&quot;,
                        &quot;correction&quot;: &quot;Modi ut voluptas velit cumque. Repudiandae est necessitatibus qui dolor molestiae.&quot;,
                        &quot;materia&quot;: 65,
                        &quot;ultimo_editor&quot;: 676,
                        &quot;criador&quot;: 677,
                        &quot;type&quot;: &quot;VerdadeiroFalso&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-11-11T23:35:43.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:35:43.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 4,
                            &quot;question_id&quot;: 40,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 3,
                            &quot;created_by&quot;: 662,
                            &quot;updated_by&quot;: 662,
                            &quot;created_at&quot;: &quot;2025-11-11T23:36:10.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-11-11T23:36:10.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 41,
                        &quot;title&quot;: &quot;Quia dolorem aut natus et sequi et unde.&quot;,
                        &quot;content&quot;: &quot;Vel eaque voluptas et aut dolorem beatae dolor. Saepe ducimus et iusto aliquam. Tenetur minus odit ut maiores consequatur quia. Beatae ut dolores quisquam et omnis autem aut. Doloribus delectus omnis similique.&quot;,
                        &quot;correction&quot;: &quot;Officia quam voluptas officia vel. Aut reiciendis ea veniam similique. Vitae voluptatum autem tempore omnis ipsam sequi vitae aut. Et aperiam deleniti nostrum aut porro.&quot;,
                        &quot;materia&quot;: 66,
                        &quot;ultimo_editor&quot;: 680,
                        &quot;criador&quot;: 681,
                        &quot;type&quot;: &quot;VerdadeiroFalso&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-11-11T23:35:43.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:35:43.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 4,
                            &quot;question_id&quot;: 41,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 4,
                            &quot;created_by&quot;: 662,
                            &quot;updated_by&quot;: 662,
                            &quot;created_at&quot;: &quot;2025-11-11T23:36:10.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-11-11T23:36:10.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 42,
                        &quot;title&quot;: &quot;Tempora nobis deleniti non.&quot;,
                        &quot;content&quot;: &quot;Necessitatibus modi qui alias. Sint aut voluptate laborum dolores. Eos aut amet quisquam et repellendus quae veritatis. Aut saepe ullam iste quod.&quot;,
                        &quot;correction&quot;: &quot;Sit non velit in est aspernatur delectus quas suscipit. Aut autem maiores minima dolorum et doloremque eligendi. Natus at numquam earum molestiae nihil. Alias cupiditate repellendus eos perspiciatis sint vel aut.&quot;,
                        &quot;materia&quot;: 67,
                        &quot;ultimo_editor&quot;: 684,
                        &quot;criador&quot;: 685,
                        &quot;type&quot;: &quot;Aberta&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-11-11T23:35:43.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:35:43.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 4,
                            &quot;question_id&quot;: 42,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 5,
                            &quot;created_by&quot;: 662,
                            &quot;updated_by&quot;: 662,
                            &quot;created_at&quot;: &quot;2025-11-11T23:36:10.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-11-11T23:36:10.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 43,
                        &quot;title&quot;: &quot;Et labore molestiae nulla culpa facilis provident repellat.&quot;,
                        &quot;content&quot;: &quot;Cupiditate quibusdam alias culpa ullam eaque dicta. Unde corrupti vel accusantium et quam fugiat eum. Neque quam tenetur repudiandae non. Dolores totam dignissimos aut.&quot;,
                        &quot;correction&quot;: &quot;Repudiandae aperiam placeat architecto quibusdam dolor. Harum voluptatibus quis similique ipsam ut. Beatae qui voluptatem consequuntur ut. Impedit eveniet quo inventore repellat.&quot;,
                        &quot;materia&quot;: 68,
                        &quot;ultimo_editor&quot;: 688,
                        &quot;criador&quot;: 689,
                        &quot;type&quot;: &quot;Aberta&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-11-11T23:35:43.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:35:43.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 4,
                            &quot;question_id&quot;: 43,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 6,
                            &quot;created_by&quot;: 662,
                            &quot;updated_by&quot;: 662,
                            &quot;created_at&quot;: &quot;2025-11-11T23:36:10.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-11-11T23:36:10.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 44,
                        &quot;title&quot;: &quot;Ut quia porro eligendi maiores ipsa tenetur repellat.&quot;,
                        &quot;content&quot;: &quot;Autem cumque cupiditate enim. Maiores ea reprehenderit aspernatur provident odio repellendus. Non nihil quos vero corporis. Voluptatem est autem et nesciunt nemo occaecati nisi.&quot;,
                        &quot;correction&quot;: &quot;Neque ut sunt dolorem. Et in iste animi consectetur velit. Quasi nihil ipsum quia tenetur nesciunt error exercitationem. Sint dignissimos consequuntur in ratione autem aspernatur molestiae.&quot;,
                        &quot;materia&quot;: 69,
                        &quot;ultimo_editor&quot;: 692,
                        &quot;criador&quot;: 693,
                        &quot;type&quot;: &quot;Multipla&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-11-11T23:35:43.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:35:43.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 4,
                            &quot;question_id&quot;: 44,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 7,
                            &quot;created_by&quot;: 662,
                            &quot;updated_by&quot;: 662,
                            &quot;created_at&quot;: &quot;2025-11-11T23:36:10.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-11-11T23:36:10.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 45,
                        &quot;title&quot;: &quot;Quia quidem nihil qui error aut.&quot;,
                        &quot;content&quot;: &quot;Laborum accusamus qui nobis rerum quo qui deserunt facere. Iure impedit dolore quia ipsa. Illum ratione voluptas sed nihil sint mollitia. Qui suscipit voluptas quasi dignissimos ut.&quot;,
                        &quot;correction&quot;: &quot;Et nesciunt qui odio. Officiis aut laborum ut quasi occaecati voluptatem quas delectus. Ab fuga delectus est pariatur. Quasi est explicabo consectetur ut et.&quot;,
                        &quot;materia&quot;: 70,
                        &quot;ultimo_editor&quot;: 696,
                        &quot;criador&quot;: 697,
                        &quot;type&quot;: &quot;VerdadeiroFalso&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-11-11T23:35:43.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:35:43.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 4,
                            &quot;question_id&quot;: 45,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 8,
                            &quot;created_by&quot;: 662,
                            &quot;updated_by&quot;: 662,
                            &quot;created_at&quot;: &quot;2025-11-11T23:36:10.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-11-11T23:36:10.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 52,
                        &quot;title&quot;: &quot;Voluptatem voluptas cum est quibusdam provident.&quot;,
                        &quot;content&quot;: &quot;Sit earum eos cum ut sapiente nesciunt vel. Ut minus ut consequatur quibusdam excepturi dolores et. Quo beatae nesciunt qui vero molestiae.&quot;,
                        &quot;correction&quot;: &quot;Rerum qui quis ea illum sit a dolore ut. Impedit ducimus autem illo dolores quaerat eos sunt architecto. Sunt doloremque vero rerum nihil temporibus non. Illo eligendi enim inventore impedit et.&quot;,
                        &quot;materia&quot;: 77,
                        &quot;ultimo_editor&quot;: 724,
                        &quot;criador&quot;: 725,
                        &quot;type&quot;: &quot;Aberta&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-11-11T23:35:43.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:35:43.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 4,
                            &quot;question_id&quot;: 52,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 15,
                            &quot;created_by&quot;: 662,
                            &quot;updated_by&quot;: 662,
                            &quot;created_at&quot;: &quot;2025-11-11T23:36:10.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-11-11T23:36:10.000000Z&quot;
                        }
                    }
                ]
            },
            {
                &quot;id&quot;: 5,
                &quot;title&quot;: &quot;Prova - quas&quot;,
                &quot;description&quot;: &quot;Dolorum dolor modi sapiente eos. Et dolor molestiae dolorem quia et similique. In eos occaecati ullam ex modi quod vel.&quot;,
                &quot;subject_id&quot;: 62,
                &quot;type&quot;: &quot;Exam&quot;,
                &quot;due_date&quot;: &quot;2025-11-23T17:29:21.000000Z&quot;,
                &quot;created_by&quot;: {
                    &quot;id&quot;: 665,
                    &quot;nome&quot;: &quot;Miss Camila Becker&quot;,
                    &quot;email&quot;: &quot;amraz@example.com&quot;,
                    &quot;tipo&quot;: &quot;ADM&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Inativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:35:30.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:35:30.000000Z&quot;
                },
                &quot;updated_by&quot;: {
                    &quot;id&quot;: 665,
                    &quot;nome&quot;: &quot;Miss Camila Becker&quot;,
                    &quot;email&quot;: &quot;amraz@example.com&quot;,
                    &quot;tipo&quot;: &quot;ADM&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Inativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:35:30.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:35:30.000000Z&quot;
                },
                &quot;status&quot;: &quot;Active&quot;,
                &quot;created_at&quot;: &quot;2025-11-11T23:35:30.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-11-11T23:35:30.000000Z&quot;,
                &quot;questions&quot;: [
                    {
                        &quot;id&quot;: 56,
                        &quot;title&quot;: &quot;Quo exercitationem architecto et cumque maiores dolores ut molestiae.&quot;,
                        &quot;content&quot;: &quot;Voluptatum ut vero aut rerum fugiat. Voluptatem aut et dolore magni sit perspiciatis necessitatibus. Tempore ex non quasi debitis quas. Soluta facere quia itaque.&quot;,
                        &quot;correction&quot;: &quot;Laboriosam recusandae distinctio est esse ducimus quos possimus aperiam. Ex asperiores in dignissimos dolore dolore. Vero nobis quidem corrupti et. Cumque quos assumenda maiores est rerum.&quot;,
                        &quot;materia&quot;: 81,
                        &quot;ultimo_editor&quot;: 884,
                        &quot;criador&quot;: 885,
                        &quot;type&quot;: &quot;Aberta&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-11-11T23:36:24.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:36:24.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 5,
                            &quot;question_id&quot;: 56,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 1,
                            &quot;created_by&quot;: 665,
                            &quot;updated_by&quot;: 665,
                            &quot;created_at&quot;: &quot;2025-11-11T23:36:52.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-11-11T23:36:52.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 57,
                        &quot;title&quot;: &quot;Repellendus quisquam saepe totam.&quot;,
                        &quot;content&quot;: &quot;Itaque facere cupiditate sit et debitis dolorem ex. Voluptatem libero et qui repudiandae velit.&quot;,
                        &quot;correction&quot;: &quot;Neque soluta deserunt ipsum repellat ut. Fuga quia est illo et.&quot;,
                        &quot;materia&quot;: 82,
                        &quot;ultimo_editor&quot;: 888,
                        &quot;criador&quot;: 889,
                        &quot;type&quot;: &quot;Multipla&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-11-11T23:36:24.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:36:24.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 5,
                            &quot;question_id&quot;: 57,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 2,
                            &quot;created_by&quot;: 665,
                            &quot;updated_by&quot;: 665,
                            &quot;created_at&quot;: &quot;2025-11-11T23:36:52.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-11-11T23:36:52.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 58,
                        &quot;title&quot;: &quot;Nulla sed asperiores quaerat nam quo officiis voluptatem.&quot;,
                        &quot;content&quot;: &quot;Cum hic dicta at illo. Labore consectetur doloribus corrupti exercitationem distinctio rem velit. Recusandae nihil est inventore officia corrupti non. Cumque nisi vel est illum quos explicabo. Ullam pariatur omnis aut quasi cumque perferendis culpa inventore.&quot;,
                        &quot;correction&quot;: &quot;Ad voluptatem voluptatem culpa. Nam ratione repudiandae repudiandae est sint a cum nulla. Et tempore labore minus voluptas neque maiores numquam. Voluptate molestiae quia enim voluptatem. Numquam nulla eum eos sed eaque.&quot;,
                        &quot;materia&quot;: 83,
                        &quot;ultimo_editor&quot;: 892,
                        &quot;criador&quot;: 893,
                        &quot;type&quot;: &quot;VerdadeiroFalso&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-11-11T23:36:24.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:36:24.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 5,
                            &quot;question_id&quot;: 58,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 3,
                            &quot;created_by&quot;: 665,
                            &quot;updated_by&quot;: 665,
                            &quot;created_at&quot;: &quot;2025-11-11T23:36:52.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-11-11T23:36:52.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 59,
                        &quot;title&quot;: &quot;Voluptas expedita at quae et non blanditiis.&quot;,
                        &quot;content&quot;: &quot;Veritatis temporibus expedita accusantium ut consequatur. Quia ea omnis accusamus dolorum quisquam pariatur et. Nihil eveniet quos voluptatem alias. Et quo est quibusdam molestias recusandae fugit doloremque.&quot;,
                        &quot;correction&quot;: &quot;Aut aliquam temporibus eaque nam. Quo quia aut laboriosam voluptatem modi natus est. Quo eligendi corrupti sequi enim vel iusto cupiditate.&quot;,
                        &quot;materia&quot;: 84,
                        &quot;ultimo_editor&quot;: 896,
                        &quot;criador&quot;: 897,
                        &quot;type&quot;: &quot;Multipla&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-11-11T23:36:24.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:36:24.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 5,
                            &quot;question_id&quot;: 59,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 4,
                            &quot;created_by&quot;: 665,
                            &quot;updated_by&quot;: 665,
                            &quot;created_at&quot;: &quot;2025-11-11T23:36:52.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-11-11T23:36:52.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 60,
                        &quot;title&quot;: &quot;Placeat magni consequuntur eum odit.&quot;,
                        &quot;content&quot;: &quot;Et quis cum ut dolorem maiores aperiam iure. Aspernatur cum beatae et quaerat molestiae. Et quo ipsum quos tenetur occaecati consequatur cum. Eos quia quos nam sint aut recusandae. Quia qui assumenda rerum voluptas consequuntur quaerat alias.&quot;,
                        &quot;correction&quot;: &quot;Sunt deserunt ut quo. Id voluptas officia quo est non. Consectetur quia voluptas provident officia sint.&quot;,
                        &quot;materia&quot;: 85,
                        &quot;ultimo_editor&quot;: 900,
                        &quot;criador&quot;: 901,
                        &quot;type&quot;: &quot;VerdadeiroFalso&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-11-11T23:36:24.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:36:24.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 5,
                            &quot;question_id&quot;: 60,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 5,
                            &quot;created_by&quot;: 665,
                            &quot;updated_by&quot;: 665,
                            &quot;created_at&quot;: &quot;2025-11-11T23:36:52.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-11-11T23:36:52.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 61,
                        &quot;title&quot;: &quot;Ut expedita hic alias suscipit pariatur.&quot;,
                        &quot;content&quot;: &quot;Maxime est ducimus consequatur voluptas harum sint. Sit ab error ex debitis vero quidem consequuntur perferendis. Voluptas facilis maxime architecto et voluptatem occaecati.&quot;,
                        &quot;correction&quot;: &quot;Maiores id odit explicabo et incidunt. Ut nesciunt inventore quisquam enim. Quibusdam dolor a est vitae. Praesentium deleniti non incidunt voluptatem et officiis.&quot;,
                        &quot;materia&quot;: 86,
                        &quot;ultimo_editor&quot;: 904,
                        &quot;criador&quot;: 905,
                        &quot;type&quot;: &quot;Aberta&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-11-11T23:36:24.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:36:24.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 5,
                            &quot;question_id&quot;: 61,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 6,
                            &quot;created_by&quot;: 665,
                            &quot;updated_by&quot;: 665,
                            &quot;created_at&quot;: &quot;2025-11-11T23:36:52.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-11-11T23:36:52.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 62,
                        &quot;title&quot;: &quot;Fugit voluptatem aut sunt soluta deserunt et nemo voluptas.&quot;,
                        &quot;content&quot;: &quot;Molestiae eaque facere quas iste nemo sint. Numquam laudantium reprehenderit ab velit ut deserunt omnis. Et et voluptatibus iusto fugiat expedita id voluptatem. Voluptatum molestias sit perspiciatis rerum ipsum perferendis.&quot;,
                        &quot;correction&quot;: &quot;Rem repellat sed qui tempora quod qui culpa. Modi quaerat harum voluptatem quibusdam dolores delectus. Rerum sunt cumque consequatur non. Quia molestias voluptas soluta.&quot;,
                        &quot;materia&quot;: 87,
                        &quot;ultimo_editor&quot;: 908,
                        &quot;criador&quot;: 909,
                        &quot;type&quot;: &quot;Multipla&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-11-11T23:36:24.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:36:24.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 5,
                            &quot;question_id&quot;: 62,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 7,
                            &quot;created_by&quot;: 665,
                            &quot;updated_by&quot;: 665,
                            &quot;created_at&quot;: &quot;2025-11-11T23:36:52.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-11-11T23:36:52.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 65,
                        &quot;title&quot;: &quot;Asperiores et ut necessitatibus numquam laudantium a.&quot;,
                        &quot;content&quot;: &quot;Impedit ab dolores quos rem tempore quidem. Asperiores et eaque et aut expedita vitae. Porro perferendis nemo eos.&quot;,
                        &quot;correction&quot;: &quot;Libero aut et accusamus quaerat voluptatem nostrum suscipit sequi. Voluptas voluptatem sint quasi quis deleniti. Sit quia beatae aliquam voluptatem tempore. Beatae fugit id voluptas optio voluptatem quibusdam possimus.&quot;,
                        &quot;materia&quot;: 90,
                        &quot;ultimo_editor&quot;: 920,
                        &quot;criador&quot;: 921,
                        &quot;type&quot;: &quot;Aberta&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-11-11T23:36:24.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:36:24.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 5,
                            &quot;question_id&quot;: 65,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 10,
                            &quot;created_by&quot;: 665,
                            &quot;updated_by&quot;: 665,
                            &quot;created_at&quot;: &quot;2025-11-11T23:36:52.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-11-11T23:36:52.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 66,
                        &quot;title&quot;: &quot;Quis quae porro et sed voluptates in iure.&quot;,
                        &quot;content&quot;: &quot;Voluptatem aperiam ea fuga aliquid labore ut. Aperiam ullam fugit omnis sunt non. Quis fugit vitae nihil voluptatem vero. Rerum enim natus ut vero deserunt odit.&quot;,
                        &quot;correction&quot;: &quot;Sunt impedit nisi quod veritatis dolor non. Sequi quidem dicta blanditiis nam enim. Eligendi maiores sit sint cumque voluptatum molestias est.&quot;,
                        &quot;materia&quot;: 91,
                        &quot;ultimo_editor&quot;: 924,
                        &quot;criador&quot;: 925,
                        &quot;type&quot;: &quot;Aberta&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-11-11T23:36:24.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:36:24.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 5,
                            &quot;question_id&quot;: 66,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 11,
                            &quot;created_by&quot;: 665,
                            &quot;updated_by&quot;: 665,
                            &quot;created_at&quot;: &quot;2025-11-11T23:36:52.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-11-11T23:36:52.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 69,
                        &quot;title&quot;: &quot;Mollitia et odio et ut perferendis ut quidem.&quot;,
                        &quot;content&quot;: &quot;Est repellat qui ipsam voluptatum incidunt. Voluptatem vero numquam nisi. Saepe facilis itaque porro amet esse commodi non.&quot;,
                        &quot;correction&quot;: &quot;Ratione vero est et minus. Numquam delectus eaque atque qui quidem. Expedita perspiciatis reprehenderit omnis aspernatur voluptas facilis. Fugiat omnis ad nesciunt.&quot;,
                        &quot;materia&quot;: 94,
                        &quot;ultimo_editor&quot;: 936,
                        &quot;criador&quot;: 937,
                        &quot;type&quot;: &quot;VerdadeiroFalso&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-11-11T23:36:24.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:36:24.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 5,
                            &quot;question_id&quot;: 69,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 14,
                            &quot;created_by&quot;: 665,
                            &quot;updated_by&quot;: 665,
                            &quot;created_at&quot;: &quot;2025-11-11T23:36:52.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-11-11T23:36:52.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 71,
                        &quot;title&quot;: &quot;Mollitia in repellat fuga voluptate dignissimos.&quot;,
                        &quot;content&quot;: &quot;Dolor illo numquam minus sint non. Laborum ea exercitationem odio velit totam architecto ut. Architecto quos voluptatem fugiat beatae adipisci.&quot;,
                        &quot;correction&quot;: &quot;Officiis maxime eligendi dolores amet non. Pariatur et nihil in aut. Doloremque voluptates non nisi aliquam sequi sit quod dolore. Soluta voluptas quo ut non molestiae id quia.&quot;,
                        &quot;materia&quot;: 96,
                        &quot;ultimo_editor&quot;: 944,
                        &quot;criador&quot;: 945,
                        &quot;type&quot;: &quot;VerdadeiroFalso&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-11-11T23:36:24.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:36:24.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 5,
                            &quot;question_id&quot;: 71,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 16,
                            &quot;created_by&quot;: 665,
                            &quot;updated_by&quot;: 665,
                            &quot;created_at&quot;: &quot;2025-11-11T23:36:52.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-11-11T23:36:52.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 73,
                        &quot;title&quot;: &quot;Blanditiis culpa velit quia est aut.&quot;,
                        &quot;content&quot;: &quot;Sed quidem officia pariatur ratione. Laborum soluta odio omnis dolorem. Rerum voluptas aliquid et. Molestiae natus est vel facilis ut et. Aliquam id dolor eligendi unde est possimus.&quot;,
                        &quot;correction&quot;: &quot;Sunt quo praesentium non aut sit voluptatem ut. Facere ut culpa voluptatem error laudantium maiores.&quot;,
                        &quot;materia&quot;: 98,
                        &quot;ultimo_editor&quot;: 952,
                        &quot;criador&quot;: 953,
                        &quot;type&quot;: &quot;Multipla&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-11-11T23:36:24.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:36:24.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 5,
                            &quot;question_id&quot;: 73,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 18,
                            &quot;created_by&quot;: 665,
                            &quot;updated_by&quot;: 665,
                            &quot;created_at&quot;: &quot;2025-11-11T23:36:52.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-11-11T23:36:52.000000Z&quot;
                        }
                    }
                ]
            },
            {
                &quot;id&quot;: 6,
                &quot;title&quot;: &quot;Atividade - magni&quot;,
                &quot;description&quot;: &quot;Aliquid nesciunt voluptas et provident est. Aspernatur qui accusamus alias vel ipsa dicta. Iure culpa aspernatur dolorem dolores.&quot;,
                &quot;subject_id&quot;: 99,
                &quot;type&quot;: &quot;Activity&quot;,
                &quot;due_date&quot;: &quot;2025-11-19T22:16:12.000000Z&quot;,
                &quot;created_by&quot;: {
                    &quot;id&quot;: 1100,
                    &quot;nome&quot;: &quot;Maya Nicolas&quot;,
                    &quot;email&quot;: &quot;qgreen@example.net&quot;,
                    &quot;tipo&quot;: &quot;ADM&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Bloqueado&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:36:52.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:36:52.000000Z&quot;
                },
                &quot;updated_by&quot;: {
                    &quot;id&quot;: 1100,
                    &quot;nome&quot;: &quot;Maya Nicolas&quot;,
                    &quot;email&quot;: &quot;qgreen@example.net&quot;,
                    &quot;tipo&quot;: &quot;ADM&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Bloqueado&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:36:52.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:36:52.000000Z&quot;
                },
                &quot;status&quot;: &quot;Active&quot;,
                &quot;created_at&quot;: &quot;2025-11-11T23:36:54.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-11-11T23:36:54.000000Z&quot;,
                &quot;questions&quot;: []
            },
            {
                &quot;id&quot;: 7,
                &quot;title&quot;: &quot;Atividade - aliquam&quot;,
                &quot;description&quot;: &quot;Voluptatum totam in sed. Et nihil porro quia ducimus. Dignissimos enim ea aut.&quot;,
                &quot;subject_id&quot;: 100,
                &quot;type&quot;: &quot;Activity&quot;,
                &quot;due_date&quot;: &quot;2025-12-10T08:35:22.000000Z&quot;,
                &quot;created_by&quot;: {
                    &quot;id&quot;: 1103,
                    &quot;nome&quot;: &quot;Jerel Predovic&quot;,
                    &quot;email&quot;: &quot;merritt.huel@example.org&quot;,
                    &quot;tipo&quot;: &quot;Operador&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Ativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:36:52.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:36:52.000000Z&quot;
                },
                &quot;updated_by&quot;: {
                    &quot;id&quot;: 1103,
                    &quot;nome&quot;: &quot;Jerel Predovic&quot;,
                    &quot;email&quot;: &quot;merritt.huel@example.org&quot;,
                    &quot;tipo&quot;: &quot;Operador&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Ativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:36:52.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:36:52.000000Z&quot;
                },
                &quot;status&quot;: &quot;Active&quot;,
                &quot;created_at&quot;: &quot;2025-11-11T23:36:54.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-11-11T23:36:54.000000Z&quot;,
                &quot;questions&quot;: [
                    {
                        &quot;id&quot;: 77,
                        &quot;title&quot;: &quot;Perferendis error et doloremque explicabo.&quot;,
                        &quot;content&quot;: &quot;Doloremque voluptas vel sed ratione harum molestiae et. Minus dolor non soluta corrupti repellat itaque. Non nemo in et nam nulla neque.&quot;,
                        &quot;correction&quot;: &quot;Cumque beatae nam debitis esse sit. Iure sint architecto omnis voluptatem est totam qui. Illo dicta vel nam tenetur reiciendis est.&quot;,
                        &quot;materia&quot;: 106,
                        &quot;ultimo_editor&quot;: 1148,
                        &quot;criador&quot;: 1149,
                        &quot;type&quot;: &quot;VerdadeiroFalso&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-11-11T23:37:03.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:37:03.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 7,
                            &quot;question_id&quot;: 77,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 1,
                            &quot;created_by&quot;: 1103,
                            &quot;updated_by&quot;: 1103,
                            &quot;created_at&quot;: &quot;2025-11-11T23:37:07.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-11-11T23:37:07.000000Z&quot;
                        }
                    }
                ]
            },
            {
                &quot;id&quot;: 8,
                &quot;title&quot;: &quot;Atividade - ipsam&quot;,
                &quot;description&quot;: &quot;Inventore sit et eos iusto sequi sed. Sequi suscipit eligendi tempore eum et id est consequatur. Aut voluptatum dolor atque qui.&quot;,
                &quot;subject_id&quot;: 101,
                &quot;type&quot;: &quot;Activity&quot;,
                &quot;due_date&quot;: &quot;2025-12-08T03:16:05.000000Z&quot;,
                &quot;created_by&quot;: {
                    &quot;id&quot;: 1106,
                    &quot;nome&quot;: &quot;Mr. Justice Farrell&quot;,
                    &quot;email&quot;: &quot;vivien80@example.net&quot;,
                    &quot;tipo&quot;: &quot;ADM&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Bloqueado&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:36:53.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:36:53.000000Z&quot;
                },
                &quot;updated_by&quot;: {
                    &quot;id&quot;: 1106,
                    &quot;nome&quot;: &quot;Mr. Justice Farrell&quot;,
                    &quot;email&quot;: &quot;vivien80@example.net&quot;,
                    &quot;tipo&quot;: &quot;ADM&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Bloqueado&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:36:53.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:36:53.000000Z&quot;
                },
                &quot;status&quot;: &quot;Active&quot;,
                &quot;created_at&quot;: &quot;2025-11-11T23:36:54.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-11-11T23:36:54.000000Z&quot;,
                &quot;questions&quot;: [
                    {
                        &quot;id&quot;: 82,
                        &quot;title&quot;: &quot;Est nihil facilis modi molestiae quibusdam.&quot;,
                        &quot;content&quot;: &quot;Necessitatibus quisquam delectus rerum quis est repudiandae eaque. Recusandae vitae quam enim. Ut in eius fugiat rerum. Expedita reprehenderit et ea voluptatem illo.&quot;,
                        &quot;correction&quot;: &quot;Optio eligendi labore sequi aut soluta ab maiores. Eum quasi perferendis quia molestias ut non. Eos quidem quo eius voluptatem in. Fugiat reiciendis aut atque corrupti quis.&quot;,
                        &quot;materia&quot;: 111,
                        &quot;ultimo_editor&quot;: 1192,
                        &quot;criador&quot;: 1193,
                        &quot;type&quot;: &quot;Multipla&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-11-11T23:37:10.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:37:10.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 8,
                            &quot;question_id&quot;: 82,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 3,
                            &quot;created_by&quot;: 1106,
                            &quot;updated_by&quot;: 1106,
                            &quot;created_at&quot;: &quot;2025-11-11T23:37:14.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-11-11T23:37:14.000000Z&quot;
                        }
                    }
                ]
            },
            {
                &quot;id&quot;: 9,
                &quot;title&quot;: &quot;Atividade - autem&quot;,
                &quot;description&quot;: &quot;Reiciendis quo consectetur autem officiis voluptatum commodi. Officia explicabo optio magnam architecto nesciunt omnis.&quot;,
                &quot;subject_id&quot;: 102,
                &quot;type&quot;: &quot;Activity&quot;,
                &quot;due_date&quot;: &quot;2025-11-25T01:56:37.000000Z&quot;,
                &quot;created_by&quot;: {
                    &quot;id&quot;: 1109,
                    &quot;nome&quot;: &quot;Ibrahim Berge&quot;,
                    &quot;email&quot;: &quot;shayne77@example.com&quot;,
                    &quot;tipo&quot;: &quot;Moderador&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Bloqueado&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:36:53.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:36:53.000000Z&quot;
                },
                &quot;updated_by&quot;: {
                    &quot;id&quot;: 1109,
                    &quot;nome&quot;: &quot;Ibrahim Berge&quot;,
                    &quot;email&quot;: &quot;shayne77@example.com&quot;,
                    &quot;tipo&quot;: &quot;Moderador&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Bloqueado&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:36:53.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:36:53.000000Z&quot;
                },
                &quot;status&quot;: &quot;Active&quot;,
                &quot;created_at&quot;: &quot;2025-11-11T23:36:54.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-11-11T23:36:54.000000Z&quot;,
                &quot;questions&quot;: []
            },
            {
                &quot;id&quot;: 10,
                &quot;title&quot;: &quot;Exerc&iacute;cio - nemo&quot;,
                &quot;description&quot;: &quot;Eligendi voluptas culpa omnis. Aut blanditiis animi illum dolorem. Debitis tempora ut quo qui. Illo nihil minus illo saepe velit sed.&quot;,
                &quot;subject_id&quot;: 115,
                &quot;type&quot;: &quot;Exercise&quot;,
                &quot;due_date&quot;: &quot;2025-12-11T04:53:59.000000Z&quot;,
                &quot;created_by&quot;: {
                    &quot;id&quot;: 1256,
                    &quot;nome&quot;: &quot;Mr. Earl Krajcik&quot;,
                    &quot;email&quot;: &quot;gaetano42@example.com&quot;,
                    &quot;tipo&quot;: &quot;Professor&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Bloqueado&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:37:21.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:37:21.000000Z&quot;
                },
                &quot;updated_by&quot;: {
                    &quot;id&quot;: 1256,
                    &quot;nome&quot;: &quot;Mr. Earl Krajcik&quot;,
                    &quot;email&quot;: &quot;gaetano42@example.com&quot;,
                    &quot;tipo&quot;: &quot;Professor&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Bloqueado&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:37:21.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:37:21.000000Z&quot;
                },
                &quot;status&quot;: &quot;Inactive&quot;,
                &quot;created_at&quot;: &quot;2025-11-11T23:37:23.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-11-11T23:37:23.000000Z&quot;,
                &quot;questions&quot;: [
                    {
                        &quot;id&quot;: 87,
                        &quot;title&quot;: &quot;Officiis repudiandae amet harum a sit velit.&quot;,
                        &quot;content&quot;: &quot;Sit explicabo voluptatem ut cumque delectus distinctio. Molestias voluptates veritatis iusto reiciendis ullam blanditiis velit. Rerum aperiam vitae aut officia animi provident distinctio enim. Aperiam quo necessitatibus id dolore.&quot;,
                        &quot;correction&quot;: &quot;Ut velit itaque optio delectus sed odio quia ut. Consequatur dolore nemo aliquid culpa architecto ut voluptatem. Modi quo quia consectetur odio cumque.&quot;,
                        &quot;materia&quot;: 119,
                        &quot;ultimo_editor&quot;: 1269,
                        &quot;criador&quot;: 1270,
                        &quot;type&quot;: &quot;VerdadeiroFalso&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-11-11T23:37:34.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:37:34.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 10,
                            &quot;question_id&quot;: 87,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 2,
                            &quot;created_by&quot;: 1256,
                            &quot;updated_by&quot;: 1256,
                            &quot;created_at&quot;: &quot;2025-11-11T23:37:56.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-11-11T23:37:56.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 89,
                        &quot;title&quot;: &quot;Itaque voluptatem sed nemo in repellendus dolor.&quot;,
                        &quot;content&quot;: &quot;Ipsam nulla eum dolorem nisi accusantium reiciendis voluptas. Iste qui ut a qui corporis. Voluptatem dignissimos quaerat voluptate doloribus qui aut. Molestiae vero distinctio soluta optio aliquam eos dolorem nisi.&quot;,
                        &quot;correction&quot;: &quot;Dolores voluptas qui possimus qui in aperiam aliquam. Facilis maxime qui id est neque veniam delectus quam. Quia porro dicta fugiat odio. Dolorem perspiciatis exercitationem harum consequuntur similique est ex.&quot;,
                        &quot;materia&quot;: 121,
                        &quot;ultimo_editor&quot;: 1277,
                        &quot;criador&quot;: 1278,
                        &quot;type&quot;: &quot;VerdadeiroFalso&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-11-11T23:37:34.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:37:34.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 10,
                            &quot;question_id&quot;: 89,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 4,
                            &quot;created_by&quot;: 1256,
                            &quot;updated_by&quot;: 1256,
                            &quot;created_at&quot;: &quot;2025-11-11T23:37:56.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-11-11T23:37:56.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 91,
                        &quot;title&quot;: &quot;At id sed ut.&quot;,
                        &quot;content&quot;: &quot;Sit officiis voluptate expedita vel consectetur ipsum ea saepe. Non nesciunt magnam qui sapiente molestias. Magnam officia quod eos at vel. Qui nostrum provident excepturi sunt deleniti blanditiis.&quot;,
                        &quot;correction&quot;: &quot;Dolorem eveniet reiciendis fuga nihil quia. Ut expedita repellat excepturi aspernatur excepturi repudiandae. Excepturi cum optio ut ex eveniet aut. Ratione in accusamus quisquam provident explicabo veniam aut veniam.&quot;,
                        &quot;materia&quot;: 123,
                        &quot;ultimo_editor&quot;: 1285,
                        &quot;criador&quot;: 1286,
                        &quot;type&quot;: &quot;Aberta&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-11-11T23:37:34.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:37:34.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 10,
                            &quot;question_id&quot;: 91,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 6,
                            &quot;created_by&quot;: 1256,
                            &quot;updated_by&quot;: 1256,
                            &quot;created_at&quot;: &quot;2025-11-11T23:37:56.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-11-11T23:37:56.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 92,
                        &quot;title&quot;: &quot;Et dolores fugiat vitae inventore.&quot;,
                        &quot;content&quot;: &quot;Voluptatibus tempore amet voluptate voluptatem. Est blanditiis provident aut et aut. Iusto ut quo impedit ipsum placeat exercitationem perspiciatis. Labore explicabo alias corporis perspiciatis delectus occaecati minima.&quot;,
                        &quot;correction&quot;: &quot;Eum eligendi et ipsa iure. Totam sit eveniet adipisci voluptatum est cum deserunt autem. Quae laboriosam vel ut ratione iusto explicabo eius saepe. Minus sed animi excepturi modi in quibusdam ut.&quot;,
                        &quot;materia&quot;: 124,
                        &quot;ultimo_editor&quot;: 1289,
                        &quot;criador&quot;: 1290,
                        &quot;type&quot;: &quot;VerdadeiroFalso&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-11-11T23:37:34.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:37:34.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 10,
                            &quot;question_id&quot;: 92,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 7,
                            &quot;created_by&quot;: 1256,
                            &quot;updated_by&quot;: 1256,
                            &quot;created_at&quot;: &quot;2025-11-11T23:37:56.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-11-11T23:37:56.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 93,
                        &quot;title&quot;: &quot;Est repellat aliquid id repellendus et.&quot;,
                        &quot;content&quot;: &quot;Tempore ex ad maxime laudantium quidem qui aut. Soluta sit itaque id commodi repellat et. Quidem fugiat perspiciatis ducimus odit ut beatae dolores id. Possimus deleniti aut atque nobis corporis.&quot;,
                        &quot;correction&quot;: &quot;Non earum veritatis soluta tempore autem. Natus provident deserunt voluptatibus itaque et officiis vitae. Animi sint deserunt porro in similique est repudiandae consequatur.&quot;,
                        &quot;materia&quot;: 125,
                        &quot;ultimo_editor&quot;: 1293,
                        &quot;criador&quot;: 1294,
                        &quot;type&quot;: &quot;Multipla&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-11-11T23:37:34.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:37:34.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 10,
                            &quot;question_id&quot;: 93,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 8,
                            &quot;created_by&quot;: 1256,
                            &quot;updated_by&quot;: 1256,
                            &quot;created_at&quot;: &quot;2025-11-11T23:37:56.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-11-11T23:37:56.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 94,
                        &quot;title&quot;: &quot;Aliquid mollitia alias porro illum alias at et sed.&quot;,
                        &quot;content&quot;: &quot;Recusandae quaerat suscipit harum natus voluptatem magnam. Laborum cum voluptates perspiciatis neque. Itaque omnis iste et. Repellat necessitatibus eaque autem officiis distinctio.&quot;,
                        &quot;correction&quot;: &quot;Velit beatae sit et eos ipsa quibusdam incidunt quidem. Perspiciatis at ut expedita rerum quis. Minus similique perferendis enim rerum iusto dignissimos necessitatibus ea.&quot;,
                        &quot;materia&quot;: 126,
                        &quot;ultimo_editor&quot;: 1297,
                        &quot;criador&quot;: 1298,
                        &quot;type&quot;: &quot;Aberta&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-11-11T23:37:34.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:37:34.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 10,
                            &quot;question_id&quot;: 94,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 9,
                            &quot;created_by&quot;: 1256,
                            &quot;updated_by&quot;: 1256,
                            &quot;created_at&quot;: &quot;2025-11-11T23:37:56.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-11-11T23:37:56.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 95,
                        &quot;title&quot;: &quot;Nisi laborum temporibus dolorum aut atque quod.&quot;,
                        &quot;content&quot;: &quot;Aspernatur velit rerum officiis voluptas illo. Aut quo voluptas id voluptatem. Officiis voluptatum tenetur in quis consequatur et quasi. Doloribus dicta quae veritatis placeat labore voluptatem ad.&quot;,
                        &quot;correction&quot;: &quot;Autem laudantium voluptas quia modi vel beatae quia. Sit odio sapiente et molestiae. Dolorem molestiae dolor excepturi quod quasi.&quot;,
                        &quot;materia&quot;: 127,
                        &quot;ultimo_editor&quot;: 1301,
                        &quot;criador&quot;: 1302,
                        &quot;type&quot;: &quot;VerdadeiroFalso&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-11-11T23:37:34.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:37:34.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 10,
                            &quot;question_id&quot;: 95,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 10,
                            &quot;created_by&quot;: 1256,
                            &quot;updated_by&quot;: 1256,
                            &quot;created_at&quot;: &quot;2025-11-11T23:37:56.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-11-11T23:37:56.000000Z&quot;
                        }
                    }
                ]
            },
            {
                &quot;id&quot;: 11,
                &quot;title&quot;: &quot;Exerc&iacute;cio - sunt&quot;,
                &quot;description&quot;: &quot;Minima laborum labore eligendi sed. Sint quam et nam. Culpa impedit in et rerum similique. Aut iste aut reiciendis in.&quot;,
                &quot;subject_id&quot;: 116,
                &quot;type&quot;: &quot;Exercise&quot;,
                &quot;due_date&quot;: &quot;2025-11-15T06:17:06.000000Z&quot;,
                &quot;created_by&quot;: {
                    &quot;id&quot;: 1259,
                    &quot;nome&quot;: &quot;Hazel Wilderman IV&quot;,
                    &quot;email&quot;: &quot;brent.borer@example.com&quot;,
                    &quot;tipo&quot;: &quot;Professor&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Ativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:37:22.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:37:22.000000Z&quot;
                },
                &quot;updated_by&quot;: {
                    &quot;id&quot;: 1259,
                    &quot;nome&quot;: &quot;Hazel Wilderman IV&quot;,
                    &quot;email&quot;: &quot;brent.borer@example.com&quot;,
                    &quot;tipo&quot;: &quot;Professor&quot;,
                    &quot;criador&quot;: null,
                    &quot;ultimo_editor&quot;: null,
                    &quot;status&quot;: &quot;Ativo&quot;,
                    &quot;created_at&quot;: &quot;2025-11-11T23:37:22.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-11-11T23:37:22.000000Z&quot;
                },
                &quot;status&quot;: &quot;Inactive&quot;,
                &quot;created_at&quot;: &quot;2025-11-11T23:37:23.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-11-11T23:37:23.000000Z&quot;,
                &quot;questions&quot;: [
                    {
                        &quot;id&quot;: 101,
                        &quot;title&quot;: &quot;Iure voluptate ab provident vel.&quot;,
                        &quot;content&quot;: &quot;Aspernatur est odio aut enim animi. Ullam voluptatem non dolores aliquid. Porro aliquam sit et in culpa accusantium officia officiis.&quot;,
                        &quot;correction&quot;: &quot;Ipsam eos quia explicabo tenetur. Pariatur corrupti optio enim accusantium temporibus porro aut alias.&quot;,
                        &quot;materia&quot;: 133,
                        &quot;ultimo_editor&quot;: 1445,
                        &quot;criador&quot;: 1446,
                        &quot;type&quot;: &quot;VerdadeiroFalso&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-11-11T23:38:07.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:38:07.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 11,
                            &quot;question_id&quot;: 101,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 1,
                            &quot;created_by&quot;: 1259,
                            &quot;updated_by&quot;: 1259,
                            &quot;created_at&quot;: &quot;2025-11-11T23:38:29.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-11-11T23:38:29.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 102,
                        &quot;title&quot;: &quot;Est et est excepturi nam numquam et doloribus.&quot;,
                        &quot;content&quot;: &quot;Et labore itaque amet eius. Ullam libero consectetur ducimus nobis repellat. Corporis modi consequatur inventore ducimus culpa molestias. Tenetur magnam est odio aut iste. Incidunt molestias est laboriosam esse mollitia.&quot;,
                        &quot;correction&quot;: &quot;Est tempore temporibus architecto ut exercitationem id. Alias culpa totam quia soluta fugit sed veritatis. Fugiat aperiam commodi aut vel fugiat. Dolorum eum exercitationem nesciunt fugit ratione quia.&quot;,
                        &quot;materia&quot;: 134,
                        &quot;ultimo_editor&quot;: 1449,
                        &quot;criador&quot;: 1450,
                        &quot;type&quot;: &quot;Multipla&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-11-11T23:38:07.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:38:07.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 11,
                            &quot;question_id&quot;: 102,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 2,
                            &quot;created_by&quot;: 1259,
                            &quot;updated_by&quot;: 1259,
                            &quot;created_at&quot;: &quot;2025-11-11T23:38:29.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-11-11T23:38:29.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 103,
                        &quot;title&quot;: &quot;Ullam ut omnis modi quisquam iusto.&quot;,
                        &quot;content&quot;: &quot;Consectetur quod sapiente blanditiis facilis ullam. Aliquid recusandae quod esse sed asperiores. Non dolorem vel earum voluptas quidem aliquam velit molestiae. Et earum amet quia voluptatem.&quot;,
                        &quot;correction&quot;: &quot;Totam autem expedita eos aut ut explicabo omnis. Numquam voluptatem ut minima voluptas at quia tempora. Facilis sed ipsam id explicabo voluptatem minus saepe. Dolorum consequatur reprehenderit dicta adipisci.&quot;,
                        &quot;materia&quot;: 135,
                        &quot;ultimo_editor&quot;: 1453,
                        &quot;criador&quot;: 1454,
                        &quot;type&quot;: &quot;Multipla&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-11-11T23:38:07.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:38:07.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 11,
                            &quot;question_id&quot;: 103,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 3,
                            &quot;created_by&quot;: 1259,
                            &quot;updated_by&quot;: 1259,
                            &quot;created_at&quot;: &quot;2025-11-11T23:38:29.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-11-11T23:38:29.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 106,
                        &quot;title&quot;: &quot;Non illo mollitia beatae odio odit.&quot;,
                        &quot;content&quot;: &quot;Dolorem dolores enim ut fuga sit excepturi quia. Atque quia cupiditate et unde. Est non doloribus ipsam odio. Minus temporibus est sit.&quot;,
                        &quot;correction&quot;: &quot;Eaque omnis est officiis pariatur. Aut aperiam nam sint laborum maiores. Voluptatem esse neque quae et eos ut suscipit. Et iusto hic et tempore eligendi deserunt.&quot;,
                        &quot;materia&quot;: 138,
                        &quot;ultimo_editor&quot;: 1465,
                        &quot;criador&quot;: 1466,
                        &quot;type&quot;: &quot;Aberta&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-11-11T23:38:07.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:38:07.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 11,
                            &quot;question_id&quot;: 106,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 6,
                            &quot;created_by&quot;: 1259,
                            &quot;updated_by&quot;: 1259,
                            &quot;created_at&quot;: &quot;2025-11-11T23:38:29.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-11-11T23:38:29.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 107,
                        &quot;title&quot;: &quot;Deleniti voluptatem voluptatem sunt reprehenderit unde autem.&quot;,
                        &quot;content&quot;: &quot;Distinctio est eveniet similique dolor eos maiores deleniti. Et iure quasi similique quis incidunt aut voluptas atque. Quasi voluptates rerum commodi delectus reprehenderit voluptatibus. Numquam similique eaque in dolor autem placeat laudantium. Quo voluptatem temporibus quidem est iusto quia.&quot;,
                        &quot;correction&quot;: &quot;Corporis explicabo facere officiis incidunt id iusto libero velit. Non tempora omnis laboriosam sint illo sed reprehenderit.&quot;,
                        &quot;materia&quot;: 139,
                        &quot;ultimo_editor&quot;: 1469,
                        &quot;criador&quot;: 1470,
                        &quot;type&quot;: &quot;VerdadeiroFalso&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-11-11T23:38:07.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:38:07.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 11,
                            &quot;question_id&quot;: 107,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 7,
                            &quot;created_by&quot;: 1259,
                            &quot;updated_by&quot;: 1259,
                            &quot;created_at&quot;: &quot;2025-11-11T23:38:29.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-11-11T23:38:29.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 109,
                        &quot;title&quot;: &quot;Delectus necessitatibus voluptatem aut.&quot;,
                        &quot;content&quot;: &quot;Est nemo sequi odit. Dicta ut incidunt cupiditate sunt sit. Quidem rerum ipsa itaque. Veniam qui quasi aut aut enim aut similique ipsa.&quot;,
                        &quot;correction&quot;: &quot;Ipsam quam numquam molestiae voluptates quam. Molestiae illo quam adipisci repudiandae perspiciatis blanditiis aperiam. Qui totam quo est consequatur perferendis. Ut nihil labore fugit vero iusto.&quot;,
                        &quot;materia&quot;: 141,
                        &quot;ultimo_editor&quot;: 1477,
                        &quot;criador&quot;: 1478,
                        &quot;type&quot;: &quot;Multipla&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-11-11T23:38:07.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:38:07.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 11,
                            &quot;question_id&quot;: 109,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 9,
                            &quot;created_by&quot;: 1259,
                            &quot;updated_by&quot;: 1259,
                            &quot;created_at&quot;: &quot;2025-11-11T23:38:29.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-11-11T23:38:29.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 110,
                        &quot;title&quot;: &quot;Eos cumque consequatur est suscipit in harum corrupti.&quot;,
                        &quot;content&quot;: &quot;Labore aspernatur deleniti est aut enim. Culpa magnam in quia aut. Laborum veritatis aperiam quis dolorum.&quot;,
                        &quot;correction&quot;: &quot;Debitis vel ea numquam quisquam delectus. Atque odio voluptas et et voluptatem consectetur et. Rerum molestiae mollitia velit molestias accusamus incidunt aut nisi.&quot;,
                        &quot;materia&quot;: 142,
                        &quot;ultimo_editor&quot;: 1481,
                        &quot;criador&quot;: 1482,
                        &quot;type&quot;: &quot;Aberta&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-11-11T23:38:07.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:38:07.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 11,
                            &quot;question_id&quot;: 110,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 10,
                            &quot;created_by&quot;: 1259,
                            &quot;updated_by&quot;: 1259,
                            &quot;created_at&quot;: &quot;2025-11-11T23:38:29.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-11-11T23:38:29.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 112,
                        &quot;title&quot;: &quot;Qui fugiat et modi quia atque sint nisi.&quot;,
                        &quot;content&quot;: &quot;Aspernatur laboriosam occaecati nihil ipsum tempora perspiciatis. Temporibus velit cupiditate ut accusantium sint et quam. Perferendis quia nobis impedit illo dicta maxime.&quot;,
                        &quot;correction&quot;: &quot;Quia nesciunt veniam esse cupiditate explicabo voluptatem. Pariatur commodi a odio repellendus illum. Sint iusto reprehenderit cupiditate atque corrupti quia id dicta.&quot;,
                        &quot;materia&quot;: 144,
                        &quot;ultimo_editor&quot;: 1489,
                        &quot;criador&quot;: 1490,
                        &quot;type&quot;: &quot;VerdadeiroFalso&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-11-11T23:38:07.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:38:07.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 11,
                            &quot;question_id&quot;: 112,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 12,
                            &quot;created_by&quot;: 1259,
                            &quot;updated_by&quot;: 1259,
                            &quot;created_at&quot;: &quot;2025-11-11T23:38:29.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-11-11T23:38:29.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 114,
                        &quot;title&quot;: &quot;Asperiores nulla non ut beatae et.&quot;,
                        &quot;content&quot;: &quot;In qui aperiam velit aut saepe facilis. Molestiae commodi vero magni sapiente et. Veritatis et voluptatum magnam quia. Ab ut harum nostrum placeat veniam est voluptatem.&quot;,
                        &quot;correction&quot;: &quot;Magni maiores aspernatur dolor quis qui sed totam. Quia quia voluptatem perferendis porro. Id eaque voluptate ut rerum magni deleniti non.&quot;,
                        &quot;materia&quot;: 146,
                        &quot;ultimo_editor&quot;: 1497,
                        &quot;criador&quot;: 1498,
                        &quot;type&quot;: &quot;Aberta&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-11-11T23:38:07.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:38:07.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 11,
                            &quot;question_id&quot;: 114,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 14,
                            &quot;created_by&quot;: 1259,
                            &quot;updated_by&quot;: 1259,
                            &quot;created_at&quot;: &quot;2025-11-11T23:38:29.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-11-11T23:38:29.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 115,
                        &quot;title&quot;: &quot;Est dolorum reprehenderit iure non.&quot;,
                        &quot;content&quot;: &quot;Dolorem vel voluptas non. Quae eum quia consequatur rem rerum. Doloremque consectetur et tenetur tempora molestias dolor magnam veniam. Non placeat possimus itaque corporis.&quot;,
                        &quot;correction&quot;: &quot;Fugiat consequatur perspiciatis fugiat adipisci ea. Sunt et exercitationem iure fuga. Iure optio molestiae dolorem sequi maxime ut est. Ut et totam rerum et magnam molestiae autem sit.&quot;,
                        &quot;materia&quot;: 147,
                        &quot;ultimo_editor&quot;: 1501,
                        &quot;criador&quot;: 1502,
                        &quot;type&quot;: &quot;Multipla&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-11-11T23:38:07.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-11-11T23:38:07.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 11,
                            &quot;question_id&quot;: 115,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 15,
                            &quot;created_by&quot;: 1259,
                            &quot;updated_by&quot;: 1259,
                            &quot;created_at&quot;: &quot;2025-11-11T23:38:29.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-11-11T23:38:29.000000Z&quot;
                        }
                    }
                ]
            }
        ],
        &quot;first_page_url&quot;: &quot;http://localhost:8000/api/questoescolecao?page=1&quot;,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 2,
        &quot;last_page_url&quot;: &quot;http://localhost:8000/api/questoescolecao?page=2&quot;,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;page&quot;: null,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/questoescolecao?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;page&quot;: 1,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/questoescolecao?page=2&quot;,
                &quot;label&quot;: &quot;2&quot;,
                &quot;page&quot;: 2,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/questoescolecao?page=2&quot;,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;page&quot;: 2,
                &quot;active&quot;: false
            }
        ],
        &quot;next_page_url&quot;: &quot;http://localhost:8000/api/questoescolecao?page=2&quot;,
        &quot;path&quot;: &quot;http://localhost:8000/api/questoescolecao&quot;,
        &quot;per_page&quot;: 10,
        &quot;prev_page_url&quot;: null,
        &quot;to&quot;: 10,
        &quot;total&quot;: 14
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-questoescolecao" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-questoescolecao"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-questoescolecao"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-questoescolecao" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-questoescolecao">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-questoescolecao" data-method="GET"
      data-path="api/questoescolecao"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-questoescolecao', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-questoescolecao"
                    onclick="tryItOut('GETapi-questoescolecao');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-questoescolecao"
                    onclick="cancelTryOut('GETapi-questoescolecao');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-questoescolecao"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/questoescolecao</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-questoescolecao"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-questoescolecao"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-questoescolecao--questoescolecao-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-questoescolecao--questoescolecao-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/questoescolecao/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/questoescolecao/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-questoescolecao--questoescolecao-">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;No query results for model [App\\Models\\QuestionCollection].&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-questoescolecao--questoescolecao-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-questoescolecao--questoescolecao-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-questoescolecao--questoescolecao-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-questoescolecao--questoescolecao-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-questoescolecao--questoescolecao-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-questoescolecao--questoescolecao-" data-method="GET"
      data-path="api/questoescolecao/{questoescolecao}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-questoescolecao--questoescolecao-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-questoescolecao--questoescolecao-"
                    onclick="tryItOut('GETapi-questoescolecao--questoescolecao-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-questoescolecao--questoescolecao-"
                    onclick="cancelTryOut('GETapi-questoescolecao--questoescolecao-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-questoescolecao--questoescolecao-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/questoescolecao/{questoescolecao}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-questoescolecao--questoescolecao-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-questoescolecao--questoescolecao-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>questoescolecao</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="questoescolecao"                data-endpoint="GETapi-questoescolecao--questoescolecao-"
               value="architecto"
               data-component="url">
    <br>
<p>The questoescolecao. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-logout">POST api/logout</h2>

<p>
</p>



<span id="example-requests-POSTapi-logout">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/logout" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/logout"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-logout">
</span>
<span id="execution-results-POSTapi-logout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-logout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-logout"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-logout">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-logout" data-method="POST"
      data-path="api/logout"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-logout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-logout"
                    onclick="tryItOut('POSTapi-logout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-logout"
                    onclick="cancelTryOut('POSTapi-logout');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-logout"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/logout</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-validatetoken">POST api/validatetoken</h2>

<p>
</p>



<span id="example-requests-POSTapi-validatetoken">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/validatetoken" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/validatetoken"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-validatetoken">
</span>
<span id="execution-results-POSTapi-validatetoken" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-validatetoken"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-validatetoken"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-validatetoken" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-validatetoken">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-validatetoken" data-method="POST"
      data-path="api/validatetoken"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-validatetoken', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-validatetoken"
                    onclick="tryItOut('POSTapi-validatetoken');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-validatetoken"
                    onclick="cancelTryOut('POSTapi-validatetoken');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-validatetoken"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/validatetoken</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-validatetoken"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-validatetoken"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-materias-filter">GET api/materias/filter</h2>

<p>
</p>



<span id="example-requests-GETapi-materias-filter">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/materias/filter" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/materias/filter"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-materias-filter">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;N&atilde;o autenticado. Token inv&aacute;lido ou ausente.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-materias-filter" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-materias-filter"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-materias-filter"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-materias-filter" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-materias-filter">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-materias-filter" data-method="GET"
      data-path="api/materias/filter"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-materias-filter', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-materias-filter"
                    onclick="tryItOut('GETapi-materias-filter');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-materias-filter"
                    onclick="cancelTryOut('GETapi-materias-filter');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-materias-filter"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/materias/filter</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-materias-filter"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-materias-filter"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-PATCHapi-materias--materia_id--status">PATCH api/materias/{materia_id}/status</h2>

<p>
</p>



<span id="example-requests-PATCHapi-materias--materia_id--status">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost:8000/api/materias/1/status" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"status\": \"Inativo\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/materias/1/status"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "status": "Inativo"
};

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-materias--materia_id--status">
</span>
<span id="execution-results-PATCHapi-materias--materia_id--status" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-materias--materia_id--status"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-materias--materia_id--status"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-materias--materia_id--status" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-materias--materia_id--status">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-materias--materia_id--status" data-method="PATCH"
      data-path="api/materias/{materia_id}/status"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-materias--materia_id--status', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-materias--materia_id--status"
                    onclick="tryItOut('PATCHapi-materias--materia_id--status');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-materias--materia_id--status"
                    onclick="cancelTryOut('PATCHapi-materias--materia_id--status');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-materias--materia_id--status"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/materias/{materia_id}/status</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-materias--materia_id--status"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-materias--materia_id--status"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>materia_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="materia_id"                data-endpoint="PATCHapi-materias--materia_id--status"
               value="1"
               data-component="url">
    <br>
<p>The ID of the materia. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PATCHapi-materias--materia_id--status"
               value="Inativo"
               data-component="body">
    <br>
<p>Example: <code>Inativo</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>Ativo</code></li> <li><code>Inativo</code></li></ul>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-materias">GET api/materias</h2>

<p>
</p>



<span id="example-requests-GETapi-materias">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/materias" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/materias"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-materias">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;N&atilde;o autenticado. Token inv&aacute;lido ou ausente.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-materias" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-materias"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-materias"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-materias" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-materias">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-materias" data-method="GET"
      data-path="api/materias"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-materias', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-materias"
                    onclick="tryItOut('GETapi-materias');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-materias"
                    onclick="cancelTryOut('GETapi-materias');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-materias"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/materias</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-materias"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-materias"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-materias">POST api/materias</h2>

<p>
</p>



<span id="example-requests-POSTapi-materias">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/materias" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"nome\": \"b\",
    \"descricao\": \"ngzmiyvdljnikhwaykcmyuwpwlvqwrsitcpscqldzsn\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/materias"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nome": "b",
    "descricao": "ngzmiyvdljnikhwaykcmyuwpwlvqwrsitcpscqldzsn"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-materias">
</span>
<span id="execution-results-POSTapi-materias" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-materias"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-materias"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-materias" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-materias">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-materias" data-method="POST"
      data-path="api/materias"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-materias', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-materias"
                    onclick="tryItOut('POSTapi-materias');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-materias"
                    onclick="cancelTryOut('POSTapi-materias');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-materias"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/materias</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-materias"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-materias"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>nome</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="nome"                data-endpoint="POSTapi-materias"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>descricao</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="descricao"                data-endpoint="POSTapi-materias"
               value="ngzmiyvdljnikhwaykcmyuwpwlvqwrsitcpscqldzsn"
               data-component="body">
    <br>
<p>Must be at least 10 characters. Example: <code>ngzmiyvdljnikhwaykcmyuwpwlvqwrsitcpscqldzsn</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-materias--id-">GET api/materias/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-materias--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/materias/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/materias/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-materias--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;N&atilde;o autenticado. Token inv&aacute;lido ou ausente.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-materias--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-materias--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-materias--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-materias--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-materias--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-materias--id-" data-method="GET"
      data-path="api/materias/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-materias--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-materias--id-"
                    onclick="tryItOut('GETapi-materias--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-materias--id-"
                    onclick="cancelTryOut('GETapi-materias--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-materias--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/materias/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-materias--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-materias--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-materias--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the materia. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-materias--id-">PUT api/materias/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-materias--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/materias/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"nome\": \"b\",
    \"descricao\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/materias/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nome": "b",
    "descricao": "architecto"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-materias--id-">
</span>
<span id="execution-results-PUTapi-materias--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-materias--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-materias--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-materias--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-materias--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-materias--id-" data-method="PUT"
      data-path="api/materias/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-materias--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-materias--id-"
                    onclick="tryItOut('PUTapi-materias--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-materias--id-"
                    onclick="cancelTryOut('PUTapi-materias--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-materias--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/materias/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/materias/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-materias--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-materias--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-materias--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the materia. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>nome</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="nome"                data-endpoint="PUTapi-materias--id-"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>descricao</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="descricao"                data-endpoint="PUTapi-materias--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-materias--id-">DELETE api/materias/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-materias--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/materias/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/materias/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-materias--id-">
</span>
<span id="execution-results-DELETEapi-materias--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-materias--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-materias--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-materias--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-materias--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-materias--id-" data-method="DELETE"
      data-path="api/materias/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-materias--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-materias--id-"
                    onclick="tryItOut('DELETEapi-materias--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-materias--id-"
                    onclick="cancelTryOut('DELETEapi-materias--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-materias--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/materias/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-materias--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-materias--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-materias--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the materia. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PATCHapi-conteudos--conteudo--status">PATCH api/conteudos/{conteudo}/status</h2>

<p>
</p>



<span id="example-requests-PATCHapi-conteudos--conteudo--status">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost:8000/api/conteudos/architecto/status" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"status\": \"Rascunho\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/conteudos/architecto/status"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "status": "Rascunho"
};

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-conteudos--conteudo--status">
</span>
<span id="execution-results-PATCHapi-conteudos--conteudo--status" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-conteudos--conteudo--status"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-conteudos--conteudo--status"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-conteudos--conteudo--status" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-conteudos--conteudo--status">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-conteudos--conteudo--status" data-method="PATCH"
      data-path="api/conteudos/{conteudo}/status"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-conteudos--conteudo--status', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-conteudos--conteudo--status"
                    onclick="tryItOut('PATCHapi-conteudos--conteudo--status');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-conteudos--conteudo--status"
                    onclick="cancelTryOut('PATCHapi-conteudos--conteudo--status');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-conteudos--conteudo--status"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/conteudos/{conteudo}/status</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-conteudos--conteudo--status"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-conteudos--conteudo--status"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>conteudo</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="conteudo"                data-endpoint="PATCHapi-conteudos--conteudo--status"
               value="architecto"
               data-component="url">
    <br>
<p>The conteudo. Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PATCHapi-conteudos--conteudo--status"
               value="Rascunho"
               data-component="body">
    <br>
<p>Example: <code>Rascunho</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>Ativo</code></li> <li><code>Inativo</code></li> <li><code>Rascunho</code></li></ul>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-conteudos">POST api/conteudos</h2>

<p>
</p>



<span id="example-requests-POSTapi-conteudos">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/conteudos" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"b\",
    \"content\": \"architecto\",
    \"content_type\": \"n\",
    \"content_type_description\": \"architecto\",
    \"content_tags\": [
        {
            \"tag_name\": \"g\",
            \"description\": \"Quos velit et fugiat sunt nihil accusantium harum.\"
        }
    ],
    \"status\": \"Rascunho\",
    \"published_at\": \"2025-12-14T21:56:08\",
    \"is_moderator_only\": true,
    \"images\": [
        \"architecto\"
    ],
    \"image_alt_text\": [
        \"n\"
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/conteudos"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "b",
    "content": "architecto",
    "content_type": "n",
    "content_type_description": "architecto",
    "content_tags": [
        {
            "tag_name": "g",
            "description": "Quos velit et fugiat sunt nihil accusantium harum."
        }
    ],
    "status": "Rascunho",
    "published_at": "2025-12-14T21:56:08",
    "is_moderator_only": true,
    "images": [
        "architecto"
    ],
    "image_alt_text": [
        "n"
    ]
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-conteudos">
</span>
<span id="execution-results-POSTapi-conteudos" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-conteudos"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-conteudos"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-conteudos" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-conteudos">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-conteudos" data-method="POST"
      data-path="api/conteudos"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-conteudos', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-conteudos"
                    onclick="tryItOut('POSTapi-conteudos');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-conteudos"
                    onclick="cancelTryOut('POSTapi-conteudos');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-conteudos"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/conteudos</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-conteudos"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-conteudos"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-conteudos"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>content</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="content"                data-endpoint="POSTapi-conteudos"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>content_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="content_type"                data-endpoint="POSTapi-conteudos"
               value="n"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>n</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>content_type_description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="content_type_description"                data-endpoint="POSTapi-conteudos"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>content_tags</code></b>&nbsp;&nbsp;
<small>object[]</small>&nbsp;
 &nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>tag_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="content_tags.0.tag_name"                data-endpoint="POSTapi-conteudos"
               value="g"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>g</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="content_tags.0.description"                data-endpoint="POSTapi-conteudos"
               value="Quos velit et fugiat sunt nihil accusantium harum."
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>Quos velit et fugiat sunt nihil accusantium harum.</code></p>
                    </div>
                                    </details>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="POSTapi-conteudos"
               value="Rascunho"
               data-component="body">
    <br>
<p>Example: <code>Rascunho</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>Ativo</code></li> <li><code>Inativo</code></li> <li><code>Rascunho</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>published_at</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="published_at"                data-endpoint="POSTapi-conteudos"
               value="2025-12-14T21:56:08"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2025-12-14T21:56:08</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_moderator_only</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-conteudos" style="display: none">
            <input type="radio" name="is_moderator_only"
                   value="true"
                   data-endpoint="POSTapi-conteudos"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-conteudos" style="display: none">
            <input type="radio" name="is_moderator_only"
                   value="false"
                   data-endpoint="POSTapi-conteudos"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>images</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="images[0]"                data-endpoint="POSTapi-conteudos"
               data-component="body">
        <input type="text" style="display: none"
               name="images[1]"                data-endpoint="POSTapi-conteudos"
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>image_alt_text</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="image_alt_text[0]"                data-endpoint="POSTapi-conteudos"
               data-component="body">
        <input type="text" style="display: none"
               name="image_alt_text[1]"                data-endpoint="POSTapi-conteudos"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters.</p>
        </div>
        </form>

                    <h2 id="endpoints-PUTapi-conteudos--id-">PUT api/conteudos/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-conteudos--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/conteudos/2" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"b\",
    \"content\": \"architecto\",
    \"content_type\": \"n\",
    \"content_type_description\": \"architecto\",
    \"content_tag\": \"n\",
    \"content_tag_description\": \"architecto\",
    \"status\": \"Rascunho\",
    \"published_at\": \"2025-12-14T21:56:08\",
    \"is_moderator_only\": false,
    \"images\": [
        \"architecto\"
    ],
    \"image_alt_text\": [
        \"n\"
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/conteudos/2"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "b",
    "content": "architecto",
    "content_type": "n",
    "content_type_description": "architecto",
    "content_tag": "n",
    "content_tag_description": "architecto",
    "status": "Rascunho",
    "published_at": "2025-12-14T21:56:08",
    "is_moderator_only": false,
    "images": [
        "architecto"
    ],
    "image_alt_text": [
        "n"
    ]
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-conteudos--id-">
</span>
<span id="execution-results-PUTapi-conteudos--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-conteudos--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-conteudos--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-conteudos--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-conteudos--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-conteudos--id-" data-method="PUT"
      data-path="api/conteudos/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-conteudos--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-conteudos--id-"
                    onclick="tryItOut('PUTapi-conteudos--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-conteudos--id-"
                    onclick="cancelTryOut('PUTapi-conteudos--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-conteudos--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/conteudos/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/conteudos/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-conteudos--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-conteudos--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-conteudos--id-"
               value="2"
               data-component="url">
    <br>
<p>The ID of the conteudo. Example: <code>2</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="PUTapi-conteudos--id-"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>content</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="content"                data-endpoint="PUTapi-conteudos--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>content_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="content_type"                data-endpoint="PUTapi-conteudos--id-"
               value="n"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>n</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>content_type_description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="content_type_description"                data-endpoint="PUTapi-conteudos--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>content_tag</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="content_tag"                data-endpoint="PUTapi-conteudos--id-"
               value="n"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>n</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>content_tag_description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="content_tag_description"                data-endpoint="PUTapi-conteudos--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PUTapi-conteudos--id-"
               value="Rascunho"
               data-component="body">
    <br>
<p>Example: <code>Rascunho</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>Ativo</code></li> <li><code>Inativo</code></li> <li><code>Rascunho</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>published_at</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="published_at"                data-endpoint="PUTapi-conteudos--id-"
               value="2025-12-14T21:56:08"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2025-12-14T21:56:08</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_moderator_only</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="PUTapi-conteudos--id-" style="display: none">
            <input type="radio" name="is_moderator_only"
                   value="true"
                   data-endpoint="PUTapi-conteudos--id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-conteudos--id-" style="display: none">
            <input type="radio" name="is_moderator_only"
                   value="false"
                   data-endpoint="PUTapi-conteudos--id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>images</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="images[0]"                data-endpoint="PUTapi-conteudos--id-"
               data-component="body">
        <input type="text" style="display: none"
               name="images[1]"                data-endpoint="PUTapi-conteudos--id-"
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>image_alt_text</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="image_alt_text[0]"                data-endpoint="PUTapi-conteudos--id-"
               data-component="body">
        <input type="text" style="display: none"
               name="image_alt_text[1]"                data-endpoint="PUTapi-conteudos--id-"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters.</p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-conteudos--id-">DELETE api/conteudos/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-conteudos--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/conteudos/2" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/conteudos/2"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-conteudos--id-">
</span>
<span id="execution-results-DELETEapi-conteudos--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-conteudos--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-conteudos--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-conteudos--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-conteudos--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-conteudos--id-" data-method="DELETE"
      data-path="api/conteudos/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-conteudos--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-conteudos--id-"
                    onclick="tryItOut('DELETEapi-conteudos--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-conteudos--id-"
                    onclick="cancelTryOut('DELETEapi-conteudos--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-conteudos--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/conteudos/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-conteudos--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-conteudos--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-conteudos--id-"
               value="2"
               data-component="url">
    <br>
<p>The ID of the conteudo. Example: <code>2</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PATCHapi-tiposconteudo--tiposconteudo--status">PATCH api/tiposconteudo/{tiposconteudo}/status</h2>

<p>
</p>



<span id="example-requests-PATCHapi-tiposconteudo--tiposconteudo--status">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost:8000/api/tiposconteudo/architecto/status" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"status\": \"Ativo\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/tiposconteudo/architecto/status"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "status": "Ativo"
};

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-tiposconteudo--tiposconteudo--status">
</span>
<span id="execution-results-PATCHapi-tiposconteudo--tiposconteudo--status" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-tiposconteudo--tiposconteudo--status"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-tiposconteudo--tiposconteudo--status"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-tiposconteudo--tiposconteudo--status" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-tiposconteudo--tiposconteudo--status">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-tiposconteudo--tiposconteudo--status" data-method="PATCH"
      data-path="api/tiposconteudo/{tiposconteudo}/status"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-tiposconteudo--tiposconteudo--status', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-tiposconteudo--tiposconteudo--status"
                    onclick="tryItOut('PATCHapi-tiposconteudo--tiposconteudo--status');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-tiposconteudo--tiposconteudo--status"
                    onclick="cancelTryOut('PATCHapi-tiposconteudo--tiposconteudo--status');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-tiposconteudo--tiposconteudo--status"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/tiposconteudo/{tiposconteudo}/status</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-tiposconteudo--tiposconteudo--status"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-tiposconteudo--tiposconteudo--status"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>tiposconteudo</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="tiposconteudo"                data-endpoint="PATCHapi-tiposconteudo--tiposconteudo--status"
               value="architecto"
               data-component="url">
    <br>
<p>The tiposconteudo. Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PATCHapi-tiposconteudo--tiposconteudo--status"
               value="Ativo"
               data-component="body">
    <br>
<p>Example: <code>Ativo</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>Ativo</code></li> <li><code>Inativo</code></li></ul>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-tiposconteudo">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-tiposconteudo">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/tiposconteudo" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"b\",
    \"description\": \"Eius et animi quos velit et.\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/tiposconteudo"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "b",
    "description": "Eius et animi quos velit et."
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-tiposconteudo">
</span>
<span id="execution-results-POSTapi-tiposconteudo" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-tiposconteudo"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-tiposconteudo"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-tiposconteudo" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-tiposconteudo">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-tiposconteudo" data-method="POST"
      data-path="api/tiposconteudo"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-tiposconteudo', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-tiposconteudo"
                    onclick="tryItOut('POSTapi-tiposconteudo');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-tiposconteudo"
                    onclick="cancelTryOut('POSTapi-tiposconteudo');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-tiposconteudo"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/tiposconteudo</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-tiposconteudo"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-tiposconteudo"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-tiposconteudo"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-tiposconteudo"
               value="Eius et animi quos velit et."
               data-component="body">
    <br>
<p>Example: <code>Eius et animi quos velit et.</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-tiposconteudo--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-tiposconteudo--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/tiposconteudo/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/tiposconteudo/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-tiposconteudo--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;N&atilde;o autenticado. Token inv&aacute;lido ou ausente.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-tiposconteudo--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-tiposconteudo--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-tiposconteudo--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-tiposconteudo--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-tiposconteudo--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-tiposconteudo--id-" data-method="GET"
      data-path="api/tiposconteudo/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-tiposconteudo--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-tiposconteudo--id-"
                    onclick="tryItOut('GETapi-tiposconteudo--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-tiposconteudo--id-"
                    onclick="cancelTryOut('GETapi-tiposconteudo--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-tiposconteudo--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/tiposconteudo/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-tiposconteudo--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-tiposconteudo--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-tiposconteudo--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the tiposconteudo. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-tiposconteudo--id-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-tiposconteudo--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/tiposconteudo/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"b\",
    \"description\": \"Eius et animi quos velit et.\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/tiposconteudo/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "b",
    "description": "Eius et animi quos velit et."
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-tiposconteudo--id-">
</span>
<span id="execution-results-PUTapi-tiposconteudo--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-tiposconteudo--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-tiposconteudo--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-tiposconteudo--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-tiposconteudo--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-tiposconteudo--id-" data-method="PUT"
      data-path="api/tiposconteudo/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-tiposconteudo--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-tiposconteudo--id-"
                    onclick="tryItOut('PUTapi-tiposconteudo--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-tiposconteudo--id-"
                    onclick="cancelTryOut('PUTapi-tiposconteudo--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-tiposconteudo--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/tiposconteudo/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/tiposconteudo/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-tiposconteudo--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-tiposconteudo--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-tiposconteudo--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the tiposconteudo. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="PUTapi-tiposconteudo--id-"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PUTapi-tiposconteudo--id-"
               value="Eius et animi quos velit et."
               data-component="body">
    <br>
<p>Example: <code>Eius et animi quos velit et.</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-tiposconteudo--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-tiposconteudo--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/tiposconteudo/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/tiposconteudo/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-tiposconteudo--id-">
</span>
<span id="execution-results-DELETEapi-tiposconteudo--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-tiposconteudo--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-tiposconteudo--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-tiposconteudo--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-tiposconteudo--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-tiposconteudo--id-" data-method="DELETE"
      data-path="api/tiposconteudo/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-tiposconteudo--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-tiposconteudo--id-"
                    onclick="tryItOut('DELETEapi-tiposconteudo--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-tiposconteudo--id-"
                    onclick="cancelTryOut('DELETEapi-tiposconteudo--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-tiposconteudo--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/tiposconteudo/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-tiposconteudo--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-tiposconteudo--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-tiposconteudo--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the tiposconteudo. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PATCHapi-tagsconteudo--tagsconteudo--status">PATCH api/tagsconteudo/{tagsconteudo}/status</h2>

<p>
</p>



<span id="example-requests-PATCHapi-tagsconteudo--tagsconteudo--status">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost:8000/api/tagsconteudo/architecto/status" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"status\": \"Ativo\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/tagsconteudo/architecto/status"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "status": "Ativo"
};

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-tagsconteudo--tagsconteudo--status">
</span>
<span id="execution-results-PATCHapi-tagsconteudo--tagsconteudo--status" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-tagsconteudo--tagsconteudo--status"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-tagsconteudo--tagsconteudo--status"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-tagsconteudo--tagsconteudo--status" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-tagsconteudo--tagsconteudo--status">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-tagsconteudo--tagsconteudo--status" data-method="PATCH"
      data-path="api/tagsconteudo/{tagsconteudo}/status"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-tagsconteudo--tagsconteudo--status', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-tagsconteudo--tagsconteudo--status"
                    onclick="tryItOut('PATCHapi-tagsconteudo--tagsconteudo--status');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-tagsconteudo--tagsconteudo--status"
                    onclick="cancelTryOut('PATCHapi-tagsconteudo--tagsconteudo--status');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-tagsconteudo--tagsconteudo--status"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/tagsconteudo/{tagsconteudo}/status</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-tagsconteudo--tagsconteudo--status"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-tagsconteudo--tagsconteudo--status"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>tagsconteudo</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="tagsconteudo"                data-endpoint="PATCHapi-tagsconteudo--tagsconteudo--status"
               value="architecto"
               data-component="url">
    <br>
<p>The tagsconteudo. Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PATCHapi-tagsconteudo--tagsconteudo--status"
               value="Ativo"
               data-component="body">
    <br>
<p>Example: <code>Ativo</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>Ativo</code></li> <li><code>Inativo</code></li></ul>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-tagsconteudo">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-tagsconteudo">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/tagsconteudo" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"tag_name\": \"b\",
    \"description\": \"Et animi quos velit et fugiat.\",
    \"is_moderator_only\": true,
    \"count\": 16
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/tagsconteudo"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "tag_name": "b",
    "description": "Et animi quos velit et fugiat.",
    "is_moderator_only": true,
    "count": 16
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-tagsconteudo">
</span>
<span id="execution-results-POSTapi-tagsconteudo" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-tagsconteudo"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-tagsconteudo"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-tagsconteudo" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-tagsconteudo">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-tagsconteudo" data-method="POST"
      data-path="api/tagsconteudo"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-tagsconteudo', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-tagsconteudo"
                    onclick="tryItOut('POSTapi-tagsconteudo');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-tagsconteudo"
                    onclick="cancelTryOut('POSTapi-tagsconteudo');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-tagsconteudo"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/tagsconteudo</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-tagsconteudo"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-tagsconteudo"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>tag_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="tag_name"                data-endpoint="POSTapi-tagsconteudo"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-tagsconteudo"
               value="Et animi quos velit et fugiat."
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>Et animi quos velit et fugiat.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_moderator_only</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
 &nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-tagsconteudo" style="display: none">
            <input type="radio" name="is_moderator_only"
                   value="true"
                   data-endpoint="POSTapi-tagsconteudo"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-tagsconteudo" style="display: none">
            <input type="radio" name="is_moderator_only"
                   value="false"
                   data-endpoint="POSTapi-tagsconteudo"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>count</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="count"                data-endpoint="POSTapi-tagsconteudo"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-tagsconteudo--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-tagsconteudo--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/tagsconteudo/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/tagsconteudo/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-tagsconteudo--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;N&atilde;o autenticado. Token inv&aacute;lido ou ausente.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-tagsconteudo--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-tagsconteudo--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-tagsconteudo--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-tagsconteudo--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-tagsconteudo--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-tagsconteudo--id-" data-method="GET"
      data-path="api/tagsconteudo/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-tagsconteudo--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-tagsconteudo--id-"
                    onclick="tryItOut('GETapi-tagsconteudo--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-tagsconteudo--id-"
                    onclick="cancelTryOut('GETapi-tagsconteudo--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-tagsconteudo--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/tagsconteudo/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-tagsconteudo--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-tagsconteudo--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-tagsconteudo--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the tagsconteudo. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-tagsconteudo--id-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-tagsconteudo--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/tagsconteudo/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"tag_name\": \"b\",
    \"description\": \"Eius et animi quos velit et.\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/tagsconteudo/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "tag_name": "b",
    "description": "Eius et animi quos velit et."
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-tagsconteudo--id-">
</span>
<span id="execution-results-PUTapi-tagsconteudo--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-tagsconteudo--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-tagsconteudo--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-tagsconteudo--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-tagsconteudo--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-tagsconteudo--id-" data-method="PUT"
      data-path="api/tagsconteudo/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-tagsconteudo--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-tagsconteudo--id-"
                    onclick="tryItOut('PUTapi-tagsconteudo--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-tagsconteudo--id-"
                    onclick="cancelTryOut('PUTapi-tagsconteudo--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-tagsconteudo--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/tagsconteudo/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/tagsconteudo/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-tagsconteudo--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-tagsconteudo--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-tagsconteudo--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the tagsconteudo. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>tag_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="tag_name"                data-endpoint="PUTapi-tagsconteudo--id-"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PUTapi-tagsconteudo--id-"
               value="Eius et animi quos velit et."
               data-component="body">
    <br>
<p>Example: <code>Eius et animi quos velit et.</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-tagsconteudo--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-tagsconteudo--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/tagsconteudo/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/tagsconteudo/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-tagsconteudo--id-">
</span>
<span id="execution-results-DELETEapi-tagsconteudo--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-tagsconteudo--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-tagsconteudo--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-tagsconteudo--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-tagsconteudo--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-tagsconteudo--id-" data-method="DELETE"
      data-path="api/tagsconteudo/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-tagsconteudo--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-tagsconteudo--id-"
                    onclick="tryItOut('DELETEapi-tagsconteudo--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-tagsconteudo--id-"
                    onclick="cancelTryOut('DELETEapi-tagsconteudo--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-tagsconteudo--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/tagsconteudo/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-tagsconteudo--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-tagsconteudo--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-tagsconteudo--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the tagsconteudo. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PATCHapi-questoes--questo--status">Change the status of the specified resource.</h2>

<p>
</p>



<span id="example-requests-PATCHapi-questoes--questo--status">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost:8000/api/questoes/architecto/status" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"status\": \"Inactive\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/questoes/architecto/status"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "status": "Inactive"
};

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-questoes--questo--status">
</span>
<span id="execution-results-PATCHapi-questoes--questo--status" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-questoes--questo--status"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-questoes--questo--status"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-questoes--questo--status" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-questoes--questo--status">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-questoes--questo--status" data-method="PATCH"
      data-path="api/questoes/{questo}/status"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-questoes--questo--status', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-questoes--questo--status"
                    onclick="tryItOut('PATCHapi-questoes--questo--status');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-questoes--questo--status"
                    onclick="cancelTryOut('PATCHapi-questoes--questo--status');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-questoes--questo--status"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/questoes/{questo}/status</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-questoes--questo--status"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-questoes--questo--status"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>questo</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="questo"                data-endpoint="PATCHapi-questoes--questo--status"
               value="architecto"
               data-component="url">
    <br>
<p>The questo. Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PATCHapi-questoes--questo--status"
               value="Inactive"
               data-component="body">
    <br>
<p>Example: <code>Inactive</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>Inactive</code></li> <li><code>Active</code></li></ul>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-questoes">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-questoes">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/questoes" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"b\",
    \"content\": \"architecto\",
    \"correction\": \"architecto\",
    \"materia\": 16,
    \"type\": \"Aberta\",
    \"alternatives\": [
        {
            \"content\": \"b\",
            \"correct\": false
        }
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/questoes"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "b",
    "content": "architecto",
    "correction": "architecto",
    "materia": 16,
    "type": "Aberta",
    "alternatives": [
        {
            "content": "b",
            "correct": false
        }
    ]
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-questoes">
</span>
<span id="execution-results-POSTapi-questoes" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-questoes"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-questoes"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-questoes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-questoes">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-questoes" data-method="POST"
      data-path="api/questoes"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-questoes', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-questoes"
                    onclick="tryItOut('POSTapi-questoes');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-questoes"
                    onclick="cancelTryOut('POSTapi-questoes');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-questoes"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/questoes</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-questoes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-questoes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-questoes"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>content</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="content"                data-endpoint="POSTapi-questoes"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>correction</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="correction"                data-endpoint="POSTapi-questoes"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>materia</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="materia"                data-endpoint="POSTapi-questoes"
               value="16"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the materias table. Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="type"                data-endpoint="POSTapi-questoes"
               value="Aberta"
               data-component="body">
    <br>
<p>Example: <code>Aberta</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>Multipla</code></li> <li><code>VerdadeiroFalso</code></li> <li><code>Aberta</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>alternatives</code></b>&nbsp;&nbsp;
<small>object[]</small>&nbsp;
 &nbsp;
 &nbsp;
<br>
<p>Must have at least 2 items.</p>
            </summary>
                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>content</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="alternatives.0.content"                data-endpoint="POSTapi-questoes"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>correct</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
 &nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-questoes" style="display: none">
            <input type="radio" name="alternatives.0.correct"
                   value="true"
                   data-endpoint="POSTapi-questoes"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-questoes" style="display: none">
            <input type="radio" name="alternatives.0.correct"
                   value="false"
                   data-endpoint="POSTapi-questoes"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
                    </div>
                                    </details>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-questoes--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-questoes--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/questoes/5" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/questoes/5"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-questoes--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;N&atilde;o autenticado. Token inv&aacute;lido ou ausente.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-questoes--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-questoes--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-questoes--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-questoes--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-questoes--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-questoes--id-" data-method="GET"
      data-path="api/questoes/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-questoes--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-questoes--id-"
                    onclick="tryItOut('GETapi-questoes--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-questoes--id-"
                    onclick="cancelTryOut('GETapi-questoes--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-questoes--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/questoes/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-questoes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-questoes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-questoes--id-"
               value="5"
               data-component="url">
    <br>
<p>The ID of the questo. Example: <code>5</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-questoes--id-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-questoes--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/questoes/5" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"b\",
    \"content\": \"architecto\",
    \"correction\": \"architecto\",
    \"materia\": 16,
    \"type\": \"Aberta\",
    \"alternatives\": [
        {
            \"content\": \"n\",
            \"correct\": false
        }
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/questoes/5"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "b",
    "content": "architecto",
    "correction": "architecto",
    "materia": 16,
    "type": "Aberta",
    "alternatives": [
        {
            "content": "n",
            "correct": false
        }
    ]
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-questoes--id-">
</span>
<span id="execution-results-PUTapi-questoes--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-questoes--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-questoes--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-questoes--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-questoes--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-questoes--id-" data-method="PUT"
      data-path="api/questoes/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-questoes--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-questoes--id-"
                    onclick="tryItOut('PUTapi-questoes--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-questoes--id-"
                    onclick="cancelTryOut('PUTapi-questoes--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-questoes--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/questoes/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/questoes/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-questoes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-questoes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-questoes--id-"
               value="5"
               data-component="url">
    <br>
<p>The ID of the questo. Example: <code>5</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="PUTapi-questoes--id-"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>content</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="content"                data-endpoint="PUTapi-questoes--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>correction</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="correction"                data-endpoint="PUTapi-questoes--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>materia</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="materia"                data-endpoint="PUTapi-questoes--id-"
               value="16"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the materias table. Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="type"                data-endpoint="PUTapi-questoes--id-"
               value="Aberta"
               data-component="body">
    <br>
<p>Example: <code>Aberta</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>Multipla</code></li> <li><code>VerdadeiroFalso</code></li> <li><code>Aberta</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>alternatives</code></b>&nbsp;&nbsp;
<small>object[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
<br>
<p>Must have at least 2 items.</p>
            </summary>
                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="alternatives.0.id"                data-endpoint="PUTapi-questoes--id-"
               value=""
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the alternatives table.</p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>content</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="alternatives.0.content"                data-endpoint="PUTapi-questoes--id-"
               value="n"
               data-component="body">
    <br>
<p>This field is required when <code>alternatives</code> is present. Must not be greater than 255 characters. Example: <code>n</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>correct</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="PUTapi-questoes--id-" style="display: none">
            <input type="radio" name="alternatives.0.correct"
                   value="true"
                   data-endpoint="PUTapi-questoes--id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-questoes--id-" style="display: none">
            <input type="radio" name="alternatives.0.correct"
                   value="false"
                   data-endpoint="PUTapi-questoes--id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
                    </div>
                                    </details>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-questoes--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-questoes--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/questoes/5" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/questoes/5"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-questoes--id-">
</span>
<span id="execution-results-DELETEapi-questoes--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-questoes--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-questoes--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-questoes--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-questoes--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-questoes--id-" data-method="DELETE"
      data-path="api/questoes/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-questoes--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-questoes--id-"
                    onclick="tryItOut('DELETEapi-questoes--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-questoes--id-"
                    onclick="cancelTryOut('DELETEapi-questoes--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-questoes--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/questoes/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-questoes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-questoes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-questoes--id-"
               value="5"
               data-component="url">
    <br>
<p>The ID of the questo. Example: <code>5</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PATCHapi-questoescolecao--questoescolecao--status">PATCH api/questoescolecao/{questoescolecao}/status</h2>

<p>
</p>



<span id="example-requests-PATCHapi-questoescolecao--questoescolecao--status">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost:8000/api/questoescolecao/architecto/status" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"status\": \"Inactive\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/questoescolecao/architecto/status"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "status": "Inactive"
};

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-questoescolecao--questoescolecao--status">
</span>
<span id="execution-results-PATCHapi-questoescolecao--questoescolecao--status" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-questoescolecao--questoescolecao--status"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-questoescolecao--questoescolecao--status"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-questoescolecao--questoescolecao--status" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-questoescolecao--questoescolecao--status">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-questoescolecao--questoescolecao--status" data-method="PATCH"
      data-path="api/questoescolecao/{questoescolecao}/status"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-questoescolecao--questoescolecao--status', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-questoescolecao--questoescolecao--status"
                    onclick="tryItOut('PATCHapi-questoescolecao--questoescolecao--status');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-questoescolecao--questoescolecao--status"
                    onclick="cancelTryOut('PATCHapi-questoescolecao--questoescolecao--status');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-questoescolecao--questoescolecao--status"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/questoescolecao/{questoescolecao}/status</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-questoescolecao--questoescolecao--status"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-questoescolecao--questoescolecao--status"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>questoescolecao</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="questoescolecao"                data-endpoint="PATCHapi-questoescolecao--questoescolecao--status"
               value="architecto"
               data-component="url">
    <br>
<p>The questoescolecao. Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PATCHapi-questoescolecao--questoescolecao--status"
               value="Inactive"
               data-component="body">
    <br>
<p>Example: <code>Inactive</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>Active</code></li> <li><code>Inactive</code></li></ul>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-questoescolecao">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-questoescolecao">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/questoescolecao" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"b\",
    \"description\": \"Et animi quos velit et fugiat.\",
    \"subject_id\": \"architecto\",
    \"type\": \"Simulation\",
    \"due_date\": \"2052-01-08\",
    \"status\": \"Active\",
    \"questions\": [
        {
            \"title\": \"b\",
            \"content\": \"architecto\",
            \"correction\": \"architecto\",
            \"materia\": 16,
            \"type\": \"Multipla\",
            \"status\": \"Active\",
            \"alternatives\": [
                {
                    \"content\": \"architecto\",
                    \"correct\": false
                }
            ]
        }
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/questoescolecao"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "b",
    "description": "Et animi quos velit et fugiat.",
    "subject_id": "architecto",
    "type": "Simulation",
    "due_date": "2052-01-08",
    "status": "Active",
    "questions": [
        {
            "title": "b",
            "content": "architecto",
            "correction": "architecto",
            "materia": 16,
            "type": "Multipla",
            "status": "Active",
            "alternatives": [
                {
                    "content": "architecto",
                    "correct": false
                }
            ]
        }
    ]
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-questoescolecao">
</span>
<span id="execution-results-POSTapi-questoescolecao" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-questoescolecao"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-questoescolecao"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-questoescolecao" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-questoescolecao">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-questoescolecao" data-method="POST"
      data-path="api/questoescolecao"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-questoescolecao', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-questoescolecao"
                    onclick="tryItOut('POSTapi-questoescolecao');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-questoescolecao"
                    onclick="cancelTryOut('POSTapi-questoescolecao');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-questoescolecao"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/questoescolecao</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-questoescolecao"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-questoescolecao"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-questoescolecao"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-questoescolecao"
               value="Et animi quos velit et fugiat."
               data-component="body">
    <br>
<p>Must not be greater than 500 characters. Example: <code>Et animi quos velit et fugiat.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>subject_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="subject_id"                data-endpoint="POSTapi-questoescolecao"
               value="architecto"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the materias table. Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="type"                data-endpoint="POSTapi-questoescolecao"
               value="Simulation"
               data-component="body">
    <br>
<p>Example: <code>Simulation</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>Exam</code></li> <li><code>Simulation</code></li> <li><code>Activity</code></li> <li><code>Exercise</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>due_date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="due_date"                data-endpoint="POSTapi-questoescolecao"
               value="2052-01-08"
               data-component="body">
    <br>
<p>Must be a valid date. Must be a date after <code>now</code>. Example: <code>2052-01-08</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="POSTapi-questoescolecao"
               value="Active"
               data-component="body">
    <br>
<p>Example: <code>Active</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>Active</code></li> <li><code>Inactive</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>questions</code></b>&nbsp;&nbsp;
<small>object[]</small>&nbsp;
 &nbsp;
 &nbsp;
<br>
<p>Must have at least 1 items.</p>
            </summary>
                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="questions.0.title"                data-endpoint="POSTapi-questoescolecao"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>content</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="questions.0.content"                data-endpoint="POSTapi-questoescolecao"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>correction</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="questions.0.correction"                data-endpoint="POSTapi-questoescolecao"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>materia</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="questions.0.materia"                data-endpoint="POSTapi-questoescolecao"
               value="16"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the materias table. Example: <code>16</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="questions.0.type"                data-endpoint="POSTapi-questoescolecao"
               value="Multipla"
               data-component="body">
    <br>
<p>Example: <code>Multipla</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>Multipla</code></li> <li><code>VerdadeiroFalso</code></li> <li><code>Aberta</code></li></ul>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="questions.0.status"                data-endpoint="POSTapi-questoescolecao"
               value="Active"
               data-component="body">
    <br>
<p>Example: <code>Active</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>Active</code></li> <li><code>Inactive</code></li></ul>
                    </div>
                                                                <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>alternatives</code></b>&nbsp;&nbsp;
<small>object[]</small>&nbsp;
 &nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>content</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="questions.0.alternatives.0.content"                data-endpoint="POSTapi-questoescolecao"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>correct</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
 &nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-questoescolecao" style="display: none">
            <input type="radio" name="questions.0.alternatives.0.correct"
                   value="true"
                   data-endpoint="POSTapi-questoescolecao"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-questoescolecao" style="display: none">
            <input type="radio" name="questions.0.alternatives.0.correct"
                   value="false"
                   data-endpoint="POSTapi-questoescolecao"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
                    </div>
                                    </details>
        </div>
                                        </details>
        </div>
        </form>

                    <h2 id="endpoints-PUTapi-questoescolecao--id-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-questoescolecao--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/questoescolecao/2" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"b\",
    \"description\": \"Et animi quos velit et fugiat.\",
    \"type\": \"Exam\",
    \"due_date\": \"2052-01-08\",
    \"status\": \"Inactive\",
    \"questions\": [
        {
            \"id\": \"architecto\",
            \"title\": \"n\",
            \"content\": \"architecto\",
            \"correction\": \"architecto\",
            \"type\": \"VerdadeiroFalso\",
            \"status\": \"Inactive\",
            \"alternatives\": [
                {
                    \"content\": \"n\",
                    \"correct\": true
                }
            ]
        }
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/questoescolecao/2"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "b",
    "description": "Et animi quos velit et fugiat.",
    "type": "Exam",
    "due_date": "2052-01-08",
    "status": "Inactive",
    "questions": [
        {
            "id": "architecto",
            "title": "n",
            "content": "architecto",
            "correction": "architecto",
            "type": "VerdadeiroFalso",
            "status": "Inactive",
            "alternatives": [
                {
                    "content": "n",
                    "correct": true
                }
            ]
        }
    ]
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-questoescolecao--id-">
</span>
<span id="execution-results-PUTapi-questoescolecao--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-questoescolecao--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-questoescolecao--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-questoescolecao--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-questoescolecao--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-questoescolecao--id-" data-method="PUT"
      data-path="api/questoescolecao/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-questoescolecao--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-questoescolecao--id-"
                    onclick="tryItOut('PUTapi-questoescolecao--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-questoescolecao--id-"
                    onclick="cancelTryOut('PUTapi-questoescolecao--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-questoescolecao--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/questoescolecao/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/questoescolecao/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-questoescolecao--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-questoescolecao--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-questoescolecao--id-"
               value="2"
               data-component="url">
    <br>
<p>The ID of the questoescolecao. Example: <code>2</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="PUTapi-questoescolecao--id-"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PUTapi-questoescolecao--id-"
               value="Et animi quos velit et fugiat."
               data-component="body">
    <br>
<p>Must not be greater than 500 characters. Example: <code>Et animi quos velit et fugiat.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>subject_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="subject_id"                data-endpoint="PUTapi-questoescolecao--id-"
               value=""
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the materias table.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="type"                data-endpoint="PUTapi-questoescolecao--id-"
               value="Exam"
               data-component="body">
    <br>
<p>Example: <code>Exam</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>Exam</code></li> <li><code>Simulation</code></li> <li><code>Activity</code></li> <li><code>Exercise</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>due_date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="due_date"                data-endpoint="PUTapi-questoescolecao--id-"
               value="2052-01-08"
               data-component="body">
    <br>
<p>Must be a valid date. Must be a date after <code>now</code>. Example: <code>2052-01-08</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PUTapi-questoescolecao--id-"
               value="Inactive"
               data-component="body">
    <br>
<p>Example: <code>Inactive</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>Active</code></li> <li><code>Inactive</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>questions</code></b>&nbsp;&nbsp;
<small>object[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="questions.0.id"                data-endpoint="PUTapi-questoescolecao--id-"
               value="architecto"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the questions table. Example: <code>architecto</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="questions.0.title"                data-endpoint="PUTapi-questoescolecao--id-"
               value="n"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>n</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>content</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="questions.0.content"                data-endpoint="PUTapi-questoescolecao--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>correction</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="questions.0.correction"                data-endpoint="PUTapi-questoescolecao--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="questions.0.type"                data-endpoint="PUTapi-questoescolecao--id-"
               value="VerdadeiroFalso"
               data-component="body">
    <br>
<p>Example: <code>VerdadeiroFalso</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>Multipla</code></li> <li><code>VerdadeiroFalso</code></li> <li><code>Aberta</code></li></ul>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="questions.0.status"                data-endpoint="PUTapi-questoescolecao--id-"
               value="Inactive"
               data-component="body">
    <br>
<p>Example: <code>Inactive</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>Active</code></li> <li><code>Inactive</code></li></ul>
                    </div>
                                                                <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>alternatives</code></b>&nbsp;&nbsp;
<small>object[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="questions.0.alternatives.0.id"                data-endpoint="PUTapi-questoescolecao--id-"
               value=""
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the alternatives table.</p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>content</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="questions.0.alternatives.0.content"                data-endpoint="PUTapi-questoescolecao--id-"
               value="n"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>n</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>correct</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="PUTapi-questoescolecao--id-" style="display: none">
            <input type="radio" name="questions.0.alternatives.0.correct"
                   value="true"
                   data-endpoint="PUTapi-questoescolecao--id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-questoescolecao--id-" style="display: none">
            <input type="radio" name="questions.0.alternatives.0.correct"
                   value="false"
                   data-endpoint="PUTapi-questoescolecao--id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
                    </div>
                                    </details>
        </div>
                                        </details>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-questoescolecao--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-questoescolecao--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/questoescolecao/2" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/questoescolecao/2"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-questoescolecao--id-">
</span>
<span id="execution-results-DELETEapi-questoescolecao--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-questoescolecao--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-questoescolecao--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-questoescolecao--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-questoescolecao--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-questoescolecao--id-" data-method="DELETE"
      data-path="api/questoescolecao/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-questoescolecao--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-questoescolecao--id-"
                    onclick="tryItOut('DELETEapi-questoescolecao--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-questoescolecao--id-"
                    onclick="cancelTryOut('DELETEapi-questoescolecao--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-questoescolecao--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/questoescolecao/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-questoescolecao--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-questoescolecao--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-questoescolecao--id-"
               value="2"
               data-component="url">
    <br>
<p>The ID of the questoescolecao. Example: <code>2</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-respostasalunos--respostaaluno--corrigir">POST api/respostasalunos/{respostaaluno}/corrigir</h2>

<p>
</p>



<span id="example-requests-POSTapi-respostasalunos--respostaaluno--corrigir">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/respostasalunos/architecto/corrigir" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"score\": 6,
    \"feedback\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/respostasalunos/architecto/corrigir"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "score": 6,
    "feedback": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-respostasalunos--respostaaluno--corrigir">
</span>
<span id="execution-results-POSTapi-respostasalunos--respostaaluno--corrigir" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-respostasalunos--respostaaluno--corrigir"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-respostasalunos--respostaaluno--corrigir"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-respostasalunos--respostaaluno--corrigir" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-respostasalunos--respostaaluno--corrigir">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-respostasalunos--respostaaluno--corrigir" data-method="POST"
      data-path="api/respostasalunos/{respostaaluno}/corrigir"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-respostasalunos--respostaaluno--corrigir', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-respostasalunos--respostaaluno--corrigir"
                    onclick="tryItOut('POSTapi-respostasalunos--respostaaluno--corrigir');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-respostasalunos--respostaaluno--corrigir"
                    onclick="cancelTryOut('POSTapi-respostasalunos--respostaaluno--corrigir');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-respostasalunos--respostaaluno--corrigir"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/respostasalunos/{respostaaluno}/corrigir</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-respostasalunos--respostaaluno--corrigir"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-respostasalunos--respostaaluno--corrigir"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>respostaaluno</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="respostaaluno"                data-endpoint="POSTapi-respostasalunos--respostaaluno--corrigir"
               value="architecto"
               data-component="url">
    <br>
<p>Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>score</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="score"                data-endpoint="POSTapi-respostasalunos--respostaaluno--corrigir"
               value="6"
               data-component="body">
    <br>
<p>Must be at least 0. Must not be greater than 10. Example: <code>6</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>feedback</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="feedback"                data-endpoint="POSTapi-respostasalunos--respostaaluno--corrigir"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-respostaalunos">GET api/respostaalunos</h2>

<p>
</p>



<span id="example-requests-GETapi-respostaalunos">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/respostaalunos" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/respostaalunos"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-respostaalunos">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;N&atilde;o autenticado. Token inv&aacute;lido ou ausente.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-respostaalunos" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-respostaalunos"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-respostaalunos"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-respostaalunos" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-respostaalunos">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-respostaalunos" data-method="GET"
      data-path="api/respostaalunos"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-respostaalunos', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-respostaalunos"
                    onclick="tryItOut('GETapi-respostaalunos');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-respostaalunos"
                    onclick="cancelTryOut('GETapi-respostaalunos');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-respostaalunos"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/respostaalunos</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-respostaalunos"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-respostaalunos"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-respostaalunos">POST api/respostaalunos</h2>

<p>
</p>



<span id="example-requests-POSTapi-respostaalunos">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/respostaalunos" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"question_id\": \"architecto\",
    \"answer\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/respostaalunos"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "question_id": "architecto",
    "answer": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-respostaalunos">
</span>
<span id="execution-results-POSTapi-respostaalunos" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-respostaalunos"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-respostaalunos"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-respostaalunos" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-respostaalunos">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-respostaalunos" data-method="POST"
      data-path="api/respostaalunos"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-respostaalunos', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-respostaalunos"
                    onclick="tryItOut('POSTapi-respostaalunos');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-respostaalunos"
                    onclick="cancelTryOut('POSTapi-respostaalunos');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-respostaalunos"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/respostaalunos</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-respostaalunos"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-respostaalunos"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>question_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="question_id"                data-endpoint="POSTapi-respostaalunos"
               value="architecto"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the questions table. Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>collection_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="collection_id"                data-endpoint="POSTapi-respostaalunos"
               value=""
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the question_collections table.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>answer</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="answer"                data-endpoint="POSTapi-respostaalunos"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-respostaalunos--id-">GET api/respostaalunos/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-respostaalunos--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/respostaalunos/16" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/respostaalunos/16"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-respostaalunos--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;N&atilde;o autenticado. Token inv&aacute;lido ou ausente.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-respostaalunos--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-respostaalunos--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-respostaalunos--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-respostaalunos--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-respostaalunos--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-respostaalunos--id-" data-method="GET"
      data-path="api/respostaalunos/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-respostaalunos--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-respostaalunos--id-"
                    onclick="tryItOut('GETapi-respostaalunos--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-respostaalunos--id-"
                    onclick="cancelTryOut('GETapi-respostaalunos--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-respostaalunos--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/respostaalunos/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-respostaalunos--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-respostaalunos--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-respostaalunos--id-"
               value="16"
               data-component="url">
    <br>
<p>The ID of the respostaaluno. Example: <code>16</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-respostaalunos--id-">PUT api/respostaalunos/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-respostaalunos--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/respostaalunos/16" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"answer\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/respostaalunos/16"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "answer": "architecto"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-respostaalunos--id-">
</span>
<span id="execution-results-PUTapi-respostaalunos--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-respostaalunos--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-respostaalunos--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-respostaalunos--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-respostaalunos--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-respostaalunos--id-" data-method="PUT"
      data-path="api/respostaalunos/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-respostaalunos--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-respostaalunos--id-"
                    onclick="tryItOut('PUTapi-respostaalunos--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-respostaalunos--id-"
                    onclick="cancelTryOut('PUTapi-respostaalunos--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-respostaalunos--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/respostaalunos/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/respostaalunos/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-respostaalunos--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-respostaalunos--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-respostaalunos--id-"
               value="16"
               data-component="url">
    <br>
<p>The ID of the respostaaluno. Example: <code>16</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>answer</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="answer"                data-endpoint="PUTapi-respostaalunos--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-respostaalunos--id-">DELETE api/respostaalunos/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-respostaalunos--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/respostaalunos/16" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/respostaalunos/16"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-respostaalunos--id-">
</span>
<span id="execution-results-DELETEapi-respostaalunos--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-respostaalunos--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-respostaalunos--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-respostaalunos--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-respostaalunos--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-respostaalunos--id-" data-method="DELETE"
      data-path="api/respostaalunos/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-respostaalunos--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-respostaalunos--id-"
                    onclick="tryItOut('DELETEapi-respostaalunos--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-respostaalunos--id-"
                    onclick="cancelTryOut('DELETEapi-respostaalunos--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-respostaalunos--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/respostaalunos/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-respostaalunos--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-respostaalunos--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-respostaalunos--id-"
               value="16"
               data-component="url">
    <br>
<p>The ID of the respostaaluno. Example: <code>16</code></p>
            </div>
                    </form>

                <h1 id="usuarios">Usuários</h1>

    <p>Filtros disponíveis:</p>
<ul>
<li>name: Filtra por nome (fullText)</li>
<li>email: Filtra por email (fullText)</li>
<li>role: Filtra por tipo de usuário</li>
<li>status: Filtra por status do usuário</li>
<li>created_at: Filtra por data de criação</li>
<li>updated_at: Filtra por data de atualização</li>
<li>deleted_at: Filtra por data de exclusão</li>
<li>created_by: Filtra por ID do criador</li>
<li>updated_by: Filtra por ID do último editor</li>
<li>search: Busca geral em nome e email</li>
</ul>

                                <h2 id="usuarios-PUTapi-users--user_id--password">updatePassword: Atualiza a senha de um usuário do sistema.</h2>

<p>
</p>



<span id="example-requests-PUTapi-users--user_id--password">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/users/1/password" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"password\": \"|]|{+-\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/users/1/password"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "password": "|]|{+-"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-users--user_id--password">
</span>
<span id="execution-results-PUTapi-users--user_id--password" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-users--user_id--password"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-users--user_id--password"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-users--user_id--password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-users--user_id--password">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-users--user_id--password" data-method="PUT"
      data-path="api/users/{user_id}/password"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-users--user_id--password', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-users--user_id--password"
                    onclick="tryItOut('PUTapi-users--user_id--password');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-users--user_id--password"
                    onclick="cancelTryOut('PUTapi-users--user_id--password');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-users--user_id--password"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/users/{user_id}/password</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-users--user_id--password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-users--user_id--password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="user_id"                data-endpoint="PUTapi-users--user_id--password"
               value="1"
               data-component="url">
    <br>
<p>The ID of the user. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="PUTapi-users--user_id--password"
               value="|]|{+-"
               data-component="body">
    <br>
<p>Must be at least 8 characters. Example: <code>|]|{+-</code></p>
        </div>
        </form>

                    <h2 id="usuarios-GETapi-users">Index: Retorna uma lista paginada de usuários do sistema com filtros opcionais.</h2>

<p>
</p>



<span id="example-requests-GETapi-users">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/users" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/users"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-users">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;N&atilde;o autenticado. Token inv&aacute;lido ou ausente.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-users" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-users"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-users"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-users">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-users" data-method="GET"
      data-path="api/users"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-users', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-users"
                    onclick="tryItOut('GETapi-users');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-users"
                    onclick="cancelTryOut('GETapi-users');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-users"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/users</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="usuarios-POSTapi-users">Store: Cria um novo usuário do sistema, criador por: ADMIN, moderador ou operador.</h2>

<p>
</p>

<p>OBS.: Não é self-registration.</p>

<span id="example-requests-POSTapi-users">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/users" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\",
    \"email\": \"zbailey@example.net\",
    \"password\": \"-0pBNvYgxw\",
    \"role\": \"admin\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/users"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b",
    "email": "zbailey@example.net",
    "password": "-0pBNvYgxw",
    "role": "admin"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-users">
</span>
<span id="execution-results-POSTapi-users" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-users"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-users"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-users">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-users" data-method="POST"
      data-path="api/users"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-users', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-users"
                    onclick="tryItOut('POSTapi-users');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-users"
                    onclick="cancelTryOut('POSTapi-users');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-users"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/users</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-users"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-users"
               value="zbailey@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Must not be greater than 100 characters. Example: <code>zbailey@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-users"
               value="-0pBNvYgxw"
               data-component="body">
    <br>
<p>Must be at least 8 characters. Example: <code>-0pBNvYgxw</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>role</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="role"                data-endpoint="POSTapi-users"
               value="admin"
               data-component="body">
    <br>
<p>Example: <code>admin</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>teacher</code></li> <li><code>student</code></li> <li><code>admin</code></li> <li><code>moderator</code></li> <li><code>operator</code></li></ul>
        </div>
        </form>

                    <h2 id="usuarios-GETapi-users--id-">Show: Retorna os detalhes de um usuário do sistema.</h2>

<p>
</p>



<span id="example-requests-GETapi-users--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/users/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/users/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-users--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;N&atilde;o autenticado. Token inv&aacute;lido ou ausente.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-users--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-users--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-users--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-users--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-users--id-" data-method="GET"
      data-path="api/users/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-users--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-users--id-"
                    onclick="tryItOut('GETapi-users--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-users--id-"
                    onclick="cancelTryOut('GETapi-users--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-users--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/users/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-users--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the user. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="usuarios-PUTapi-users--id-">update: Atualiza os dados de um usuário do sistema.</h2>

<p>
</p>



<span id="example-requests-PUTapi-users--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/users/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"nome\": \"b\",
    \"email\": \"zbailey@example.net\",
    \"tipo\": \"Professor\",
    \"status\": \"Inativo\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/users/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nome": "b",
    "email": "zbailey@example.net",
    "tipo": "Professor",
    "status": "Inativo"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-users--id-">
</span>
<span id="execution-results-PUTapi-users--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-users--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-users--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-users--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-users--id-" data-method="PUT"
      data-path="api/users/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-users--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-users--id-"
                    onclick="tryItOut('PUTapi-users--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-users--id-"
                    onclick="cancelTryOut('PUTapi-users--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-users--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/users/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/users/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-users--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the user. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>nome</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="nome"                data-endpoint="PUTapi-users--id-"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="PUTapi-users--id-"
               value="zbailey@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Must not be greater than 100 characters. Example: <code>zbailey@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>tipo</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="tipo"                data-endpoint="PUTapi-users--id-"
               value="Professor"
               data-component="body">
    <br>
<p>Example: <code>Professor</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>Professor</code></li> <li><code>Aluno</code></li> <li><code>ADM</code></li> <li><code>Moderador</code></li> <li><code>Operador</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PUTapi-users--id-"
               value="Inativo"
               data-component="body">
    <br>
<p>Example: <code>Inativo</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>Ativo</code></li> <li><code>Inativo</code></li> <li><code>Bloqueado</code></li></ul>
        </div>
        </form>

                    <h2 id="usuarios-DELETEapi-users--id-">Destroy: Remove um usuário do sistema.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-users--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/users/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/users/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-users--id-">
</span>
<span id="execution-results-DELETEapi-users--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-users--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-users--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-users--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-users--id-" data-method="DELETE"
      data-path="api/users/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-users--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-users--id-"
                    onclick="tryItOut('DELETEapi-users--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-users--id-"
                    onclick="cancelTryOut('DELETEapi-users--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-users--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/users/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-users--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the user. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="usuarios-PATCHapi-users--user_id--status">changeStatus: Altera o status de um usuário do sistema.</h2>

<p>
</p>



<span id="example-requests-PATCHapi-users--user_id--status">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost:8000/api/users/1/status" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"status\": \"active\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/users/1/status"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "status": "active"
};

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-users--user_id--status">
</span>
<span id="execution-results-PATCHapi-users--user_id--status" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-users--user_id--status"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-users--user_id--status"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-users--user_id--status" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-users--user_id--status">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-users--user_id--status" data-method="PATCH"
      data-path="api/users/{user_id}/status"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-users--user_id--status', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-users--user_id--status"
                    onclick="tryItOut('PATCHapi-users--user_id--status');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-users--user_id--status"
                    onclick="cancelTryOut('PATCHapi-users--user_id--status');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-users--user_id--status"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/users/{user_id}/status</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-users--user_id--status"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-users--user_id--status"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="user_id"                data-endpoint="PATCHapi-users--user_id--status"
               value="1"
               data-component="url">
    <br>
<p>The ID of the user. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PATCHapi-users--user_id--status"
               value="active"
               data-component="body">
    <br>
<p>Example: <code>active</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>active</code></li> <li><code>inactive</code></li> <li><code>blocked</code></li></ul>
        </div>
        </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
