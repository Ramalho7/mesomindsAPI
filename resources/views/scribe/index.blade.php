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
                                                    <li class="tocify-item level-2" data-unique="usuarios-GETapi-me">
                                <a href="#usuarios-GETapi-me">Retorna as informações do usuário autenticado junto com suas habilidades.</a>
                            </li>
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
        <li>Last updated: December 15, 2025</li>
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
    \"name\": \"architecto\",
    \"email\": \"jessica@example.com\",
    \"password\": \"secret123\",
    \"role\": \"teacher\"
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
    "name": "architecto",
    "email": "jessica@example.com",
    "password": "secret123",
    "role": "teacher"
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
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-register"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
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
            <b style="line-height: 2;"><code>role</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="role"                data-endpoint="POSTapi-register"
               value="teacher"
               data-component="body">
    <br>
<p>Example: <code>teacher</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>student</code></li> <li><code>teacher</code></li></ul>
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
            <p>Example response (500):</p>
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
    &quot;message&quot;: &quot;Server Error&quot;
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
    --get "http://localhost:8000/api/conteudos/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/conteudos/1"
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
        &quot;id&quot;: 1,
        &quot;title&quot;: &quot;Qui blanditiis quia natus quia ea et ducimus.&quot;,
        &quot;body&quot;: &quot;Ea et est hic nulla est eum. At voluptatem quod ut dolore. Dolorum ducimus in voluptatem quia. Alias ut a possimus officiis est est.&quot;,
        &quot;duration_minutes&quot;: null,
        &quot;id_materia&quot;: null,
        &quot;content_types_id&quot;: 21,
        &quot;created_by&quot;: &quot;01kcfr3jdbhwrag9dd2ymqyw8f&quot;,
        &quot;updated_by&quot;: &quot;01kcfr3jjy7yymrawdjh51sgrv&quot;,
        &quot;status&quot;: &quot;published&quot;,
        &quot;deleted_at&quot;: null,
        &quot;published_at&quot;: null,
        &quot;created_at&quot;: &quot;2025-12-15T00:56:12.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-12-15T00:56:12.000000Z&quot;,
        &quot;creator&quot;: {
            &quot;id&quot;: &quot;01kcfr3jdbhwrag9dd2ymqyw8f&quot;,
            &quot;name&quot;: &quot;Prof. Martine Goodwin&quot;,
            &quot;email&quot;: &quot;vdonnelly@example.net&quot;,
            &quot;created_by&quot;: null,
            &quot;updated_by&quot;: null,
            &quot;status&quot;: &quot;inactive&quot;,
            &quot;deleted_at&quot;: null,
            &quot;created_at&quot;: &quot;2025-12-15T00:55:58.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-12-15T00:55:58.000000Z&quot;
        },
        &quot;content_type&quot;: {
            &quot;id&quot;: 21,
            &quot;title&quot;: &quot;Ines Reynolds&quot;,
            &quot;description&quot;: &quot;Aut assumenda sunt dolores voluptates.&quot;,
            &quot;status&quot;: &quot;active&quot;,
            &quot;slug&quot;: null,
            &quot;icon&quot;: null,
            &quot;color&quot;: null,
            &quot;created_by&quot;: &quot;01kcfr3jrjg90jzm2g1r92babg&quot;,
            &quot;updated_by&quot;: &quot;01kcfr3jy9dphkecwym2stbq51&quot;,
            &quot;created_at&quot;: &quot;2025-12-15T00:55:58.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-12-15T00:55:58.000000Z&quot;
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
               value="1"
               data-component="url">
    <br>
<p>The ID of the conteudo. Example: <code>1</code></p>
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
                &quot;title&quot;: &quot;Dr. Nat Cormier Jr.&quot;,
                &quot;description&quot;: &quot;Nulla ad illo modi aut et sunt.&quot;,
                &quot;status&quot;: &quot;active&quot;,
                &quot;slug&quot;: null,
                &quot;icon&quot;: null,
                &quot;color&quot;: null,
                &quot;created_by&quot;: &quot;01kcfr3b6jyg9n1h6wv6d5gbg4&quot;,
                &quot;updated_by&quot;: &quot;01kcfr3bc63fz1m6vzygbaww2z&quot;,
                &quot;created_at&quot;: &quot;2025-12-15T00:55:57.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-12-15T00:55:57.000000Z&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: &quot;01kcfr3b6jyg9n1h6wv6d5gbg4&quot;,
                    &quot;name&quot;: &quot;Nels Blanda DDS&quot;,
                    &quot;email&quot;: &quot;dell59@example.com&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;active&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:55:50.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:55:50.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: &quot;01kcfr3bc63fz1m6vzygbaww2z&quot;,
                    &quot;name&quot;: &quot;Prof. Jamal Koelpin&quot;,
                    &quot;email&quot;: &quot;judson.hilpert@example.com&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;active&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:55:50.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:55:50.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 2,
                &quot;title&quot;: &quot;Dr. Jennyfer Thiel&quot;,
                &quot;description&quot;: &quot;Dolore numquam aut unde omnis facere ipsam vel.&quot;,
                &quot;status&quot;: &quot;inactive&quot;,
                &quot;slug&quot;: null,
                &quot;icon&quot;: null,
                &quot;color&quot;: null,
                &quot;created_by&quot;: &quot;01kcfr3bhr7b1j0fdzh5yjr24q&quot;,
                &quot;updated_by&quot;: &quot;01kcfr3bqa7969xys46jj9ww2p&quot;,
                &quot;created_at&quot;: &quot;2025-12-15T00:55:57.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-12-15T00:55:57.000000Z&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: &quot;01kcfr3bhr7b1j0fdzh5yjr24q&quot;,
                    &quot;name&quot;: &quot;Domenica Wehner&quot;,
                    &quot;email&quot;: &quot;xgorczany@example.org&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;active&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:55:51.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:55:51.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: &quot;01kcfr3bqa7969xys46jj9ww2p&quot;,
                    &quot;name&quot;: &quot;Dr. Sabrina Wilkinson&quot;,
                    &quot;email&quot;: &quot;lacy.huels@example.com&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;inactive&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:55:51.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:55:51.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 3,
                &quot;title&quot;: &quot;Marianne Grimes&quot;,
                &quot;description&quot;: &quot;Doloremque et suscipit velit.&quot;,
                &quot;status&quot;: &quot;inactive&quot;,
                &quot;slug&quot;: null,
                &quot;icon&quot;: null,
                &quot;color&quot;: null,
                &quot;created_by&quot;: &quot;01kcfr3bwykt9mhwcw75rztgky&quot;,
                &quot;updated_by&quot;: &quot;01kcfr3c2nrsr5b59cebh31saj&quot;,
                &quot;created_at&quot;: &quot;2025-12-15T00:55:57.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-12-15T00:55:57.000000Z&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: &quot;01kcfr3bwykt9mhwcw75rztgky&quot;,
                    &quot;name&quot;: &quot;Edward Swaniawski&quot;,
                    &quot;email&quot;: &quot;jordi75@example.org&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;inactive&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:55:51.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:55:51.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: &quot;01kcfr3c2nrsr5b59cebh31saj&quot;,
                    &quot;name&quot;: &quot;Loy Dickens&quot;,
                    &quot;email&quot;: &quot;uwalter@example.com&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;active&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:55:51.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:55:51.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 4,
                &quot;title&quot;: &quot;Elbert Hodkiewicz&quot;,
                &quot;description&quot;: &quot;Excepturi ut quo rerum et cum.&quot;,
                &quot;status&quot;: &quot;inactive&quot;,
                &quot;slug&quot;: null,
                &quot;icon&quot;: null,
                &quot;color&quot;: null,
                &quot;created_by&quot;: &quot;01kcfr3c8bj80w43ntjfty3r6p&quot;,
                &quot;updated_by&quot;: &quot;01kcfr3ce03vwb5k69eyrd7ds9&quot;,
                &quot;created_at&quot;: &quot;2025-12-15T00:55:57.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-12-15T00:55:57.000000Z&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: &quot;01kcfr3c8bj80w43ntjfty3r6p&quot;,
                    &quot;name&quot;: &quot;Dr. Kaden Yost PhD&quot;,
                    &quot;email&quot;: &quot;qpagac@example.net&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;banned&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:55:51.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:55:51.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: &quot;01kcfr3ce03vwb5k69eyrd7ds9&quot;,
                    &quot;name&quot;: &quot;Mr. Mitchell Hansen DVM&quot;,
                    &quot;email&quot;: &quot;roscoe00@example.net&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;banned&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:55:52.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:55:52.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 5,
                &quot;title&quot;: &quot;Ms. Daisha Bogisich DVM&quot;,
                &quot;description&quot;: &quot;Sint reiciendis adipisci illo reiciendis ut.&quot;,
                &quot;status&quot;: &quot;inactive&quot;,
                &quot;slug&quot;: null,
                &quot;icon&quot;: null,
                &quot;color&quot;: null,
                &quot;created_by&quot;: &quot;01kcfr3ckrfyqgqy54tbxdjznd&quot;,
                &quot;updated_by&quot;: &quot;01kcfr3cse0tca6d6tvdepm8c1&quot;,
                &quot;created_at&quot;: &quot;2025-12-15T00:55:57.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-12-15T00:55:57.000000Z&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: &quot;01kcfr3ckrfyqgqy54tbxdjznd&quot;,
                    &quot;name&quot;: &quot;Haylee Bogan III&quot;,
                    &quot;email&quot;: &quot;oharber@example.net&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;active&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:55:52.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:55:52.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: &quot;01kcfr3cse0tca6d6tvdepm8c1&quot;,
                    &quot;name&quot;: &quot;Halie Littel&quot;,
                    &quot;email&quot;: &quot;vaughn.volkman@example.com&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;inactive&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:55:52.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:55:52.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 6,
                &quot;title&quot;: &quot;Elsie Eichmann&quot;,
                &quot;description&quot;: &quot;Rerum mollitia atque iure dignissimos distinctio non dignissimos voluptas.&quot;,
                &quot;status&quot;: &quot;active&quot;,
                &quot;slug&quot;: null,
                &quot;icon&quot;: null,
                &quot;color&quot;: null,
                &quot;created_by&quot;: &quot;01kcfr3cz76aegve73cp6nw3x2&quot;,
                &quot;updated_by&quot;: &quot;01kcfr3d4yf4wwbjwzz16d6h9j&quot;,
                &quot;created_at&quot;: &quot;2025-12-15T00:55:57.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-12-15T00:55:57.000000Z&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: &quot;01kcfr3cz76aegve73cp6nw3x2&quot;,
                    &quot;name&quot;: &quot;Wellington Sawayn&quot;,
                    &quot;email&quot;: &quot;swilkinson@example.net&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;inactive&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:55:52.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:55:52.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: &quot;01kcfr3d4yf4wwbjwzz16d6h9j&quot;,
                    &quot;name&quot;: &quot;Mrs. Natalia Kling IV&quot;,
                    &quot;email&quot;: &quot;emmanuel.feeney@example.com&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;banned&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:55:52.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:55:52.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 7,
                &quot;title&quot;: &quot;Avis Harris I&quot;,
                &quot;description&quot;: &quot;Rerum praesentium ut sunt excepturi officiis et optio perspiciatis.&quot;,
                &quot;status&quot;: &quot;active&quot;,
                &quot;slug&quot;: null,
                &quot;icon&quot;: null,
                &quot;color&quot;: null,
                &quot;created_by&quot;: &quot;01kcfr3danps823pbs9mdcaj96&quot;,
                &quot;updated_by&quot;: &quot;01kcfr3dg8afc163tw0rxkq6kn&quot;,
                &quot;created_at&quot;: &quot;2025-12-15T00:55:57.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-12-15T00:55:57.000000Z&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: &quot;01kcfr3danps823pbs9mdcaj96&quot;,
                    &quot;name&quot;: &quot;Dr. Fritz Anderson Jr.&quot;,
                    &quot;email&quot;: &quot;eric52@example.com&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;banned&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:55:52.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:55:52.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: &quot;01kcfr3dg8afc163tw0rxkq6kn&quot;,
                    &quot;name&quot;: &quot;Ruthie Pfannerstill&quot;,
                    &quot;email&quot;: &quot;akihn@example.net&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;active&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:55:53.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:55:53.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 8,
                &quot;title&quot;: &quot;Yoshiko Shields V&quot;,
                &quot;description&quot;: &quot;Enim modi dolores eius nobis natus nemo odit.&quot;,
                &quot;status&quot;: &quot;active&quot;,
                &quot;slug&quot;: null,
                &quot;icon&quot;: null,
                &quot;color&quot;: null,
                &quot;created_by&quot;: &quot;01kcfr3dnxk8wx3g4ns3strbrp&quot;,
                &quot;updated_by&quot;: &quot;01kcfr3dvj7ssx4syag0ve567k&quot;,
                &quot;created_at&quot;: &quot;2025-12-15T00:55:57.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-12-15T00:55:57.000000Z&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: &quot;01kcfr3dnxk8wx3g4ns3strbrp&quot;,
                    &quot;name&quot;: &quot;Keenan Stracke&quot;,
                    &quot;email&quot;: &quot;ivah94@example.com&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;banned&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:55:53.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:55:53.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: &quot;01kcfr3dvj7ssx4syag0ve567k&quot;,
                    &quot;name&quot;: &quot;Dr. Abdul Koepp DVM&quot;,
                    &quot;email&quot;: &quot;nikita.kunze@example.net&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;banned&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:55:53.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:55:53.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 9,
                &quot;title&quot;: &quot;Ms. Crystal Simonis&quot;,
                &quot;description&quot;: &quot;Enim fugit et sequi repellendus est reprehenderit numquam.&quot;,
                &quot;status&quot;: &quot;inactive&quot;,
                &quot;slug&quot;: null,
                &quot;icon&quot;: null,
                &quot;color&quot;: null,
                &quot;created_by&quot;: &quot;01kcfr3e194d65z0a08yv3k62g&quot;,
                &quot;updated_by&quot;: &quot;01kcfr3e6y8d4ctjy6k5as0x2d&quot;,
                &quot;created_at&quot;: &quot;2025-12-15T00:55:57.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-12-15T00:55:57.000000Z&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: &quot;01kcfr3e194d65z0a08yv3k62g&quot;,
                    &quot;name&quot;: &quot;Emily Stehr&quot;,
                    &quot;email&quot;: &quot;turcotte.christophe@example.org&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;banned&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:55:53.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:55:53.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: &quot;01kcfr3e6y8d4ctjy6k5as0x2d&quot;,
                    &quot;name&quot;: &quot;Dr. Kennedy Jerde&quot;,
                    &quot;email&quot;: &quot;torp.luther@example.org&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;inactive&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:55:53.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:55:53.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 10,
                &quot;title&quot;: &quot;Miss Nona Stamm Sr.&quot;,
                &quot;description&quot;: &quot;Error reprehenderit qui excepturi tenetur omnis accusantium nobis dolor.&quot;,
                &quot;status&quot;: &quot;inactive&quot;,
                &quot;slug&quot;: null,
                &quot;icon&quot;: null,
                &quot;color&quot;: null,
                &quot;created_by&quot;: &quot;01kcfr3ecpfzs1kgdwv7r9efj5&quot;,
                &quot;updated_by&quot;: &quot;01kcfr3ejbzzwc2nh4fq5en0me&quot;,
                &quot;created_at&quot;: &quot;2025-12-15T00:55:57.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-12-15T00:55:57.000000Z&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: &quot;01kcfr3ecpfzs1kgdwv7r9efj5&quot;,
                    &quot;name&quot;: &quot;Jared Schowalter&quot;,
                    &quot;email&quot;: &quot;margarete97@example.org&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;inactive&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:55:54.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:55:54.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: &quot;01kcfr3ejbzzwc2nh4fq5en0me&quot;,
                    &quot;name&quot;: &quot;Ben Brakus&quot;,
                    &quot;email&quot;: &quot;pwill@example.com&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;inactive&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:55:54.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:55:54.000000Z&quot;
                }
            }
        ],
        &quot;first_page_url&quot;: &quot;http://localhost:8000/api/tiposconteudo?page=1&quot;,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 4,
        &quot;last_page_url&quot;: &quot;http://localhost:8000/api/tiposconteudo?page=4&quot;,
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
        &quot;total&quot;: 40
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
                &quot;tag_name&quot;: &quot;aut&quot;,
                &quot;is_moderator_only&quot;: 1,
                &quot;count&quot;: 5858,
                &quot;description&quot;: &quot;Ipsa minima dolores alias aut.&quot;,
                &quot;slug&quot;: null,
                &quot;color&quot;: null,
                &quot;status&quot;: &quot;active&quot;,
                &quot;deleted_at&quot;: null,
                &quot;created_by&quot;: &quot;01kcfr33ypkvpsh0crxgbzc5rk&quot;,
                &quot;updated_by&quot;: &quot;01kcfr344apcnvz3vwm4w93b8t&quot;,
                &quot;created_at&quot;: &quot;2025-12-15T00:55:50.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-12-15T00:55:50.000000Z&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: &quot;01kcfr33ypkvpsh0crxgbzc5rk&quot;,
                    &quot;name&quot;: &quot;Prof. Demario Hessel MD&quot;,
                    &quot;email&quot;: &quot;christophe.cormier@example.com&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;inactive&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:55:43.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:55:43.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: &quot;01kcfr344apcnvz3vwm4w93b8t&quot;,
                    &quot;name&quot;: &quot;Prof. Greta Koss Sr.&quot;,
                    &quot;email&quot;: &quot;tledner@example.org&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;inactive&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:55:43.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:55:43.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 2,
                &quot;tag_name&quot;: &quot;animi&quot;,
                &quot;is_moderator_only&quot;: 0,
                &quot;count&quot;: 9026,
                &quot;description&quot;: &quot;Maxime perspiciatis aut sit officia id ut magni.&quot;,
                &quot;slug&quot;: null,
                &quot;color&quot;: null,
                &quot;status&quot;: &quot;inactive&quot;,
                &quot;deleted_at&quot;: null,
                &quot;created_by&quot;: &quot;01kcfr34bssskq8yfnt50wxvjw&quot;,
                &quot;updated_by&quot;: &quot;01kcfr34hgf1b9m5kzs9thccvm&quot;,
                &quot;created_at&quot;: &quot;2025-12-15T00:55:50.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-12-15T00:55:50.000000Z&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: &quot;01kcfr34bssskq8yfnt50wxvjw&quot;,
                    &quot;name&quot;: &quot;Dr. Blaze Bruen&quot;,
                    &quot;email&quot;: &quot;hardy.bechtelar@example.org&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;banned&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:55:43.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:55:43.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: &quot;01kcfr34hgf1b9m5kzs9thccvm&quot;,
                    &quot;name&quot;: &quot;Christy Ankunding&quot;,
                    &quot;email&quot;: &quot;ziemann.gregoria@example.net&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;inactive&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:55:43.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:55:43.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 3,
                &quot;tag_name&quot;: &quot;quas&quot;,
                &quot;is_moderator_only&quot;: 0,
                &quot;count&quot;: 6577,
                &quot;description&quot;: &quot;Adipisci repellat omnis officia quos exercitationem perspiciatis.&quot;,
                &quot;slug&quot;: null,
                &quot;color&quot;: null,
                &quot;status&quot;: &quot;inactive&quot;,
                &quot;deleted_at&quot;: null,
                &quot;created_by&quot;: &quot;01kcfr34q93dyq0tmc0sfrrt9w&quot;,
                &quot;updated_by&quot;: &quot;01kcfr34x31pk93fdxmdchvzg0&quot;,
                &quot;created_at&quot;: &quot;2025-12-15T00:55:50.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-12-15T00:55:50.000000Z&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: &quot;01kcfr34q93dyq0tmc0sfrrt9w&quot;,
                    &quot;name&quot;: &quot;Dr. Lyric Trantow DVM&quot;,
                    &quot;email&quot;: &quot;madisyn53@example.org&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;active&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:55:44.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:55:44.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: &quot;01kcfr34x31pk93fdxmdchvzg0&quot;,
                    &quot;name&quot;: &quot;Bria Schamberger&quot;,
                    &quot;email&quot;: &quot;vinnie00@example.org&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;inactive&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:55:44.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:55:44.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 4,
                &quot;tag_name&quot;: &quot;et&quot;,
                &quot;is_moderator_only&quot;: 1,
                &quot;count&quot;: 5521400,
                &quot;description&quot;: &quot;Dolorem in fuga inventore animi optio.&quot;,
                &quot;slug&quot;: null,
                &quot;color&quot;: null,
                &quot;status&quot;: &quot;active&quot;,
                &quot;deleted_at&quot;: null,
                &quot;created_by&quot;: &quot;01kcfr352qwgvrd7tfp87p0rdn&quot;,
                &quot;updated_by&quot;: &quot;01kcfr358b53cwtr7ctg32rsdh&quot;,
                &quot;created_at&quot;: &quot;2025-12-15T00:55:50.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-12-15T00:55:50.000000Z&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: &quot;01kcfr352qwgvrd7tfp87p0rdn&quot;,
                    &quot;name&quot;: &quot;Dr. Monique Mante&quot;,
                    &quot;email&quot;: &quot;oaltenwerth@example.com&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;banned&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:55:44.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:55:44.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: &quot;01kcfr358b53cwtr7ctg32rsdh&quot;,
                    &quot;name&quot;: &quot;Mozelle Gorczany&quot;,
                    &quot;email&quot;: &quot;kcrona@example.com&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;inactive&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:55:44.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:55:44.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 5,
                &quot;tag_name&quot;: &quot;quaerat&quot;,
                &quot;is_moderator_only&quot;: 1,
                &quot;count&quot;: 5408,
                &quot;description&quot;: &quot;At voluptates id corporis.&quot;,
                &quot;slug&quot;: null,
                &quot;color&quot;: null,
                &quot;status&quot;: &quot;active&quot;,
                &quot;deleted_at&quot;: null,
                &quot;created_by&quot;: &quot;01kcfr35dzhnhs08255qf0yp6d&quot;,
                &quot;updated_by&quot;: &quot;01kcfr35kmssfxrz8mham6vf9t&quot;,
                &quot;created_at&quot;: &quot;2025-12-15T00:55:50.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-12-15T00:55:50.000000Z&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: &quot;01kcfr35dzhnhs08255qf0yp6d&quot;,
                    &quot;name&quot;: &quot;Ms. Nora Goldner&quot;,
                    &quot;email&quot;: &quot;orie.pagac@example.com&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;active&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:55:44.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:55:44.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: &quot;01kcfr35kmssfxrz8mham6vf9t&quot;,
                    &quot;name&quot;: &quot;Francis Rath&quot;,
                    &quot;email&quot;: &quot;casper05@example.net&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;inactive&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:55:45.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:55:45.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 6,
                &quot;tag_name&quot;: &quot;nesciunt&quot;,
                &quot;is_moderator_only&quot;: 1,
                &quot;count&quot;: 40,
                &quot;description&quot;: &quot;Doloribus repellendus perspiciatis et illum.&quot;,
                &quot;slug&quot;: null,
                &quot;color&quot;: null,
                &quot;status&quot;: &quot;active&quot;,
                &quot;deleted_at&quot;: null,
                &quot;created_by&quot;: &quot;01kcfr35s9ahg5spc8ksvzjbet&quot;,
                &quot;updated_by&quot;: &quot;01kcfr35z0b41608071q46pj9f&quot;,
                &quot;created_at&quot;: &quot;2025-12-15T00:55:50.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-12-15T00:55:50.000000Z&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: &quot;01kcfr35s9ahg5spc8ksvzjbet&quot;,
                    &quot;name&quot;: &quot;Marcel Leannon V&quot;,
                    &quot;email&quot;: &quot;renee.johns@example.com&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;active&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:55:45.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:55:45.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: &quot;01kcfr35z0b41608071q46pj9f&quot;,
                    &quot;name&quot;: &quot;Kevon Reichel&quot;,
                    &quot;email&quot;: &quot;nicolas.brayan@example.com&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;inactive&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:55:45.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:55:45.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 7,
                &quot;tag_name&quot;: &quot;deserunt&quot;,
                &quot;is_moderator_only&quot;: 0,
                &quot;count&quot;: 512145,
                &quot;description&quot;: &quot;Autem quasi quo voluptates ea harum aut.&quot;,
                &quot;slug&quot;: null,
                &quot;color&quot;: null,
                &quot;status&quot;: &quot;inactive&quot;,
                &quot;deleted_at&quot;: null,
                &quot;created_by&quot;: &quot;01kcfr364p98va6z26y23t20f7&quot;,
                &quot;updated_by&quot;: &quot;01kcfr36aaj7mv2geznsj22n3g&quot;,
                &quot;created_at&quot;: &quot;2025-12-15T00:55:50.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-12-15T00:55:50.000000Z&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: &quot;01kcfr364p98va6z26y23t20f7&quot;,
                    &quot;name&quot;: &quot;Myrl Littel&quot;,
                    &quot;email&quot;: &quot;sabrina88@example.com&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;active&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:55:45.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:55:45.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: &quot;01kcfr36aaj7mv2geznsj22n3g&quot;,
                    &quot;name&quot;: &quot;Prof. Destiny Smitham&quot;,
                    &quot;email&quot;: &quot;wehner.aisha@example.org&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;banned&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:55:45.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:55:45.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 8,
                &quot;tag_name&quot;: &quot;eos&quot;,
                &quot;is_moderator_only&quot;: 1,
                &quot;count&quot;: 522,
                &quot;description&quot;: &quot;Impedit aut sit ullam aut deserunt fugit neque.&quot;,
                &quot;slug&quot;: null,
                &quot;color&quot;: null,
                &quot;status&quot;: &quot;inactive&quot;,
                &quot;deleted_at&quot;: null,
                &quot;created_by&quot;: &quot;01kcfr36fy8jfeczjqa99mrvyg&quot;,
                &quot;updated_by&quot;: &quot;01kcfr36nk3c18sfat0qk858wt&quot;,
                &quot;created_at&quot;: &quot;2025-12-15T00:55:50.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-12-15T00:55:50.000000Z&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: &quot;01kcfr36fy8jfeczjqa99mrvyg&quot;,
                    &quot;name&quot;: &quot;Waylon Block&quot;,
                    &quot;email&quot;: &quot;kayleigh.effertz@example.net&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;banned&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:55:45.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:55:45.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: &quot;01kcfr36nk3c18sfat0qk858wt&quot;,
                    &quot;name&quot;: &quot;Percy Emmerich&quot;,
                    &quot;email&quot;: &quot;vrowe@example.org&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;inactive&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:55:46.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:55:46.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 9,
                &quot;tag_name&quot;: &quot;quis&quot;,
                &quot;is_moderator_only&quot;: 0,
                &quot;count&quot;: 20992,
                &quot;description&quot;: &quot;Molestias cum adipisci qui enim beatae sed.&quot;,
                &quot;slug&quot;: null,
                &quot;color&quot;: null,
                &quot;status&quot;: &quot;active&quot;,
                &quot;deleted_at&quot;: null,
                &quot;created_by&quot;: &quot;01kcfr36v6zz6ernvg5hvpyaj6&quot;,
                &quot;updated_by&quot;: &quot;01kcfr370s5je80st417xhw5ms&quot;,
                &quot;created_at&quot;: &quot;2025-12-15T00:55:50.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-12-15T00:55:50.000000Z&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: &quot;01kcfr36v6zz6ernvg5hvpyaj6&quot;,
                    &quot;name&quot;: &quot;Jackie Cartwright&quot;,
                    &quot;email&quot;: &quot;amelia.davis@example.org&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;banned&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:55:46.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:55:46.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: &quot;01kcfr370s5je80st417xhw5ms&quot;,
                    &quot;name&quot;: &quot;Estevan Abshire IV&quot;,
                    &quot;email&quot;: &quot;oboyer@example.com&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;inactive&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:55:46.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:55:46.000000Z&quot;
                }
            },
            {
                &quot;id&quot;: 10,
                &quot;tag_name&quot;: &quot;voluptas&quot;,
                &quot;is_moderator_only&quot;: 0,
                &quot;count&quot;: 5419,
                &quot;description&quot;: &quot;Expedita ex ut tempora voluptates sunt.&quot;,
                &quot;slug&quot;: null,
                &quot;color&quot;: null,
                &quot;status&quot;: &quot;active&quot;,
                &quot;deleted_at&quot;: null,
                &quot;created_by&quot;: &quot;01kcfr376e6sq0nw9dgwrwzj9y&quot;,
                &quot;updated_by&quot;: &quot;01kcfr37c4y1fjy0afznqkbmyc&quot;,
                &quot;created_at&quot;: &quot;2025-12-15T00:55:50.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-12-15T00:55:50.000000Z&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: &quot;01kcfr376e6sq0nw9dgwrwzj9y&quot;,
                    &quot;name&quot;: &quot;Jairo Grady&quot;,
                    &quot;email&quot;: &quot;amira.armstrong@example.com&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;inactive&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:55:46.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:55:46.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: &quot;01kcfr37c4y1fjy0afznqkbmyc&quot;,
                    &quot;name&quot;: &quot;Wilburn Parisian IV&quot;,
                    &quot;email&quot;: &quot;vpollich@example.com&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;banned&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:55:46.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:55:46.000000Z&quot;
                }
            }
        ],
        &quot;first_page_url&quot;: &quot;http://localhost:8000/api/tagsconteudo?page=1&quot;,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 2,
        &quot;last_page_url&quot;: &quot;http://localhost:8000/api/tagsconteudo?page=2&quot;,
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
        &quot;total&quot;: 20
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
                &quot;id&quot;: 1,
                &quot;title&quot;: &quot;Illo nulla ratione adipisci dignissimos incidunt et nihil.&quot;,
                &quot;content&quot;: &quot;Aliquam mollitia mollitia qui aut pariatur ex. Optio hic dolore quisquam doloribus. Voluptatibus voluptas assumenda consequatur et quas.&quot;,
                &quot;correction&quot;: &quot;Sunt ut sit vel corporis officia in fugiat. Dicta consequuntur voluptatum minus. Cum exercitationem quod illo voluptate. Sed hic voluptate omnis amet est rerum et.&quot;,
                &quot;materia_id&quot;: 21,
                &quot;created_by&quot;: &quot;01kcfr40zsmcj163bet3410rh1&quot;,
                &quot;updated_by&quot;: &quot;01kcfr40t1av738rwbk7ex7t26&quot;,
                &quot;type&quot;: &quot;Aberta&quot;,
                &quot;status&quot;: &quot;Inactive&quot;,
                &quot;created_at&quot;: &quot;2025-12-15T00:56:20.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-12-15T00:56:20.000000Z&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: &quot;01kcfr40zsmcj163bet3410rh1&quot;,
                    &quot;name&quot;: &quot;Mable Tromp&quot;,
                    &quot;email&quot;: &quot;kaia.klein@example.net&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;inactive&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:56:13.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:56:13.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: &quot;01kcfr40t1av738rwbk7ex7t26&quot;,
                    &quot;name&quot;: &quot;Jacey Mills&quot;,
                    &quot;email&quot;: &quot;larson.jo@example.org&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;active&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:56:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:56:12.000000Z&quot;
                },
                &quot;alternatives&quot;: [
                    {
                        &quot;id&quot;: 1,
                        &quot;question_id&quot;: 1,
                        &quot;content&quot;: &quot;Necessitatibus quae esse sed deleniti consequatur nihil.&quot;,
                        &quot;correct&quot;: 0,
                        &quot;created_by&quot;: &quot;01kcfr4854wd2wnehyapjc45ae&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr48avzfk6yqv1vw8gfzd6&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:21.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:21.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 2,
                        &quot;question_id&quot;: 1,
                        &quot;content&quot;: &quot;Atque natus non dignissimos quis.&quot;,
                        &quot;correct&quot;: 0,
                        &quot;created_by&quot;: &quot;01kcfr48ggwxyzwdthrx6gm8cf&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr48p46bnkwsdnmw991vry&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:21.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:21.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 3,
                        &quot;question_id&quot;: 1,
                        &quot;content&quot;: &quot;Et molestiae ad sit velit cum.&quot;,
                        &quot;correct&quot;: 0,
                        &quot;created_by&quot;: &quot;01kcfr48vqkgy851gng2jhxydh&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr491avg4nwshsk0f36wx4&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:21.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:21.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 4,
                        &quot;question_id&quot;: 1,
                        &quot;content&quot;: &quot;Alias modi animi quas nisi vitae sunt incidunt.&quot;,
                        &quot;correct&quot;: 0,
                        &quot;created_by&quot;: &quot;01kcfr4971xze71hfn27qfxzj6&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr49crvtnfe03zrbg1qa4j&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:21.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:21.000000Z&quot;
                    }
                ],
                &quot;materia&quot;: {
                    &quot;id&quot;: 21,
                    &quot;nome&quot;: &quot;Citlalli Gusikowski&quot;,
                    &quot;descricao&quot;: &quot;Rerum veritatis et dolorem aut ut praesentium.&quot;,
                    &quot;status&quot;: &quot;Ativo&quot;,
                    &quot;created_at&quot;: &quot;2025-12-15T00:56:13.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:56:13.000000Z&quot;,
                    &quot;created_by&quot;: &quot;01kcfr415k8k0qybacxvdct1mc&quot;,
                    &quot;updated_by&quot;: &quot;01kcfr41bbgbst3eeje2df7hjj&quot;
                }
            },
            {
                &quot;id&quot;: 2,
                &quot;title&quot;: &quot;Atque eaque eum sit illum porro aliquid inventore eius.&quot;,
                &quot;content&quot;: &quot;Molestiae sed cupiditate sint illo dolores. Nihil provident autem corporis laboriosam numquam. Vitae aut eveniet temporibus placeat rerum veritatis similique. Voluptatem aut sed qui sint.&quot;,
                &quot;correction&quot;: &quot;Harum qui libero voluptate minima. Eos necessitatibus unde id. Dicta libero iure minus voluptatem.&quot;,
                &quot;materia_id&quot;: 22,
                &quot;created_by&quot;: &quot;01kcfr41q35n4htcke4qnwqqtw&quot;,
                &quot;updated_by&quot;: &quot;01kcfr41hbph157h47hrmqp52k&quot;,
                &quot;type&quot;: &quot;VerdadeiroFalso&quot;,
                &quot;status&quot;: &quot;Inactive&quot;,
                &quot;created_at&quot;: &quot;2025-12-15T00:56:20.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-12-15T00:56:20.000000Z&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: &quot;01kcfr41q35n4htcke4qnwqqtw&quot;,
                    &quot;name&quot;: &quot;Prof. Eli O&#039;Conner DDS&quot;,
                    &quot;email&quot;: &quot;steuber.cyrus@example.net&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;banned&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:56:13.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:56:13.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: &quot;01kcfr41hbph157h47hrmqp52k&quot;,
                    &quot;name&quot;: &quot;Alysha Rath&quot;,
                    &quot;email&quot;: &quot;adela.ruecker@example.org&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;inactive&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:56:13.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:56:13.000000Z&quot;
                },
                &quot;alternatives&quot;: [
                    {
                        &quot;id&quot;: 5,
                        &quot;question_id&quot;: 2,
                        &quot;content&quot;: &quot;Maxime nesciunt distinctio natus omnis.&quot;,
                        &quot;correct&quot;: 1,
                        &quot;created_by&quot;: &quot;01kcfr49kddvym5rwmb3198jgy&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr49s4b46wn9yd9ecbw4qy&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:23.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:23.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 6,
                        &quot;question_id&quot;: 2,
                        &quot;content&quot;: &quot;Aliquid vel ad quis voluptate corporis aperiam non.&quot;,
                        &quot;correct&quot;: 0,
                        &quot;created_by&quot;: &quot;01kcfr49yrsc1e93e3h8epqyyw&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr4a4b9e7qyxwa5nc1t6bv&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:23.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:23.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 7,
                        &quot;question_id&quot;: 2,
                        &quot;content&quot;: &quot;Non voluptatem sit aut voluptates voluptates voluptatem ex.&quot;,
                        &quot;correct&quot;: 0,
                        &quot;created_by&quot;: &quot;01kcfr4aa2zm6f0ev9xzdvtmq5&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr4afrp8n2cxxj1hktegdz&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:23.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:23.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 8,
                        &quot;question_id&quot;: 2,
                        &quot;content&quot;: &quot;Non aut qui fugiat nisi.&quot;,
                        &quot;correct&quot;: 0,
                        &quot;created_by&quot;: &quot;01kcfr4anfnpw7seeerw7swqr7&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr4av319n25xncztgvsqw9&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:23.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:23.000000Z&quot;
                    }
                ],
                &quot;materia&quot;: {
                    &quot;id&quot;: 22,
                    &quot;nome&quot;: &quot;Dr. Jerod Von MD&quot;,
                    &quot;descricao&quot;: &quot;Ut cum dolorem voluptatum dignissimos.&quot;,
                    &quot;status&quot;: &quot;Ativo&quot;,
                    &quot;created_at&quot;: &quot;2025-12-15T00:56:14.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:56:14.000000Z&quot;,
                    &quot;created_by&quot;: &quot;01kcfr41wtfmhzr3q1smzytzdw&quot;,
                    &quot;updated_by&quot;: &quot;01kcfr422k57syct36hyzhh98a&quot;
                }
            },
            {
                &quot;id&quot;: 3,
                &quot;title&quot;: &quot;Ducimus exercitationem distinctio aut qui.&quot;,
                &quot;content&quot;: &quot;Officia error deleniti minima qui eveniet. Facere ab hic omnis molestias veniam beatae. Impedit repudiandae voluptates et explicabo quis non fugit.&quot;,
                &quot;correction&quot;: &quot;Quaerat quis adipisci ut est tempora est a. Eius ullam est nulla. Incidunt nam velit maiores facere quibusdam. Ad expedita et cumque.&quot;,
                &quot;materia_id&quot;: 23,
                &quot;created_by&quot;: &quot;01kcfr42hfpg8hnsryrs2z5hfy&quot;,
                &quot;updated_by&quot;: &quot;01kcfr42bd0ddjg4q2syqge760&quot;,
                &quot;type&quot;: &quot;Multipla&quot;,
                &quot;status&quot;: &quot;Active&quot;,
                &quot;created_at&quot;: &quot;2025-12-15T00:56:20.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-12-15T00:56:20.000000Z&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: &quot;01kcfr42hfpg8hnsryrs2z5hfy&quot;,
                    &quot;name&quot;: &quot;Orie Johnson&quot;,
                    &quot;email&quot;: &quot;rozella.oconnell@example.com&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;inactive&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:56:14.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:56:14.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: &quot;01kcfr42bd0ddjg4q2syqge760&quot;,
                    &quot;name&quot;: &quot;Howell Jakubowski&quot;,
                    &quot;email&quot;: &quot;tthompson@example.org&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;banned&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:56:14.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:56:14.000000Z&quot;
                },
                &quot;alternatives&quot;: [
                    {
                        &quot;id&quot;: 9,
                        &quot;question_id&quot;: 3,
                        &quot;content&quot;: &quot;Repudiandae totam neque animi ut.&quot;,
                        &quot;correct&quot;: 1,
                        &quot;created_by&quot;: &quot;01kcfr4b1e0x5hmwpyvjmb5p25&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr4b75z5q205n4we31x9zq&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:24.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:24.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 10,
                        &quot;question_id&quot;: 3,
                        &quot;content&quot;: &quot;Velit rerum unde at id.&quot;,
                        &quot;correct&quot;: 1,
                        &quot;created_by&quot;: &quot;01kcfr4bcsabw74kef1nbn775a&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr4bjgc4r4bskysvt6m8xr&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:24.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:24.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 11,
                        &quot;question_id&quot;: 3,
                        &quot;content&quot;: &quot;Non quidem maiores ut veritatis perferendis dolor rem.&quot;,
                        &quot;correct&quot;: 0,
                        &quot;created_by&quot;: &quot;01kcfr4br57mh5hgwv14hn1p3k&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr4bxsx8ym0bdeywyazyae&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:24.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:24.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 12,
                        &quot;question_id&quot;: 3,
                        &quot;content&quot;: &quot;Dolor quo ad est qui commodi.&quot;,
                        &quot;correct&quot;: 1,
                        &quot;created_by&quot;: &quot;01kcfr4c3fvcktdg7qs0th5sez&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr4c9b19wtv4qjjshmrfv3&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:24.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:24.000000Z&quot;
                    }
                ],
                &quot;materia&quot;: {
                    &quot;id&quot;: 23,
                    &quot;nome&quot;: &quot;Laila Herzog&quot;,
                    &quot;descricao&quot;: &quot;Cupiditate dicta repudiandae et libero eius voluptatem.&quot;,
                    &quot;status&quot;: &quot;Inativo&quot;,
                    &quot;created_at&quot;: &quot;2025-12-15T00:56:15.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:56:15.000000Z&quot;,
                    &quot;created_by&quot;: &quot;01kcfr42q5jffsbw5m5pcxw9h4&quot;,
                    &quot;updated_by&quot;: &quot;01kcfr42wxfrtkdxjr30rr1sfk&quot;
                }
            },
            {
                &quot;id&quot;: 4,
                &quot;title&quot;: &quot;In quia voluptas sed tempora minus quia ut totam.&quot;,
                &quot;content&quot;: &quot;Assumenda ipsum dolore omnis laborum repellat. Voluptatem rerum facere quia officiis ullam. Nostrum modi est eos rem.&quot;,
                &quot;correction&quot;: &quot;Et tempora sit minima eligendi sit aspernatur tenetur. Vitae autem error ratione rem. Nam quia voluptatum dicta repellat exercitationem labore.&quot;,
                &quot;materia_id&quot;: 24,
                &quot;created_by&quot;: &quot;01kcfr438ht8k1z9zyywg7nn6w&quot;,
                &quot;updated_by&quot;: &quot;01kcfr432t55nnk1zkgt5s18yc&quot;,
                &quot;type&quot;: &quot;VerdadeiroFalso&quot;,
                &quot;status&quot;: &quot;Active&quot;,
                &quot;created_at&quot;: &quot;2025-12-15T00:56:20.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-12-15T00:56:20.000000Z&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: &quot;01kcfr438ht8k1z9zyywg7nn6w&quot;,
                    &quot;name&quot;: &quot;Caroline Orn&quot;,
                    &quot;email&quot;: &quot;xchristiansen@example.org&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;active&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:56:15.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:56:15.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: &quot;01kcfr432t55nnk1zkgt5s18yc&quot;,
                    &quot;name&quot;: &quot;Gregoria Kris&quot;,
                    &quot;email&quot;: &quot;armando30@example.com&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;banned&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:56:15.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:56:15.000000Z&quot;
                },
                &quot;alternatives&quot;: [
                    {
                        &quot;id&quot;: 13,
                        &quot;question_id&quot;: 4,
                        &quot;content&quot;: &quot;Rerum voluptates non eius sed et eveniet.&quot;,
                        &quot;correct&quot;: 1,
                        &quot;created_by&quot;: &quot;01kcfr4cfrqz76wv7dgssdxtwv&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr4cnb3r4aj5c08d01hjq0&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:26.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:26.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 14,
                        &quot;question_id&quot;: 4,
                        &quot;content&quot;: &quot;Placeat aut dolores dicta consequatur.&quot;,
                        &quot;correct&quot;: 0,
                        &quot;created_by&quot;: &quot;01kcfr4cv1jbncyzqjqw8hjc6f&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr4d0pmc9mptbwwgqmf8e8&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:26.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:26.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 15,
                        &quot;question_id&quot;: 4,
                        &quot;content&quot;: &quot;Quia voluptas eum reiciendis sint quia id placeat.&quot;,
                        &quot;correct&quot;: 0,
                        &quot;created_by&quot;: &quot;01kcfr4d6aqwd6c0qgtwwfzjq3&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr4dbz1e1n5c5t6s28kv85&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:26.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:26.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 16,
                        &quot;question_id&quot;: 4,
                        &quot;content&quot;: &quot;Qui rerum nisi soluta aut ea corrupti nemo.&quot;,
                        &quot;correct&quot;: 0,
                        &quot;created_by&quot;: &quot;01kcfr4dhpygyvn94xcdhf9dwq&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr4dqg4wy229yxxdcxr03v&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:26.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:26.000000Z&quot;
                    }
                ],
                &quot;materia&quot;: {
                    &quot;id&quot;: 24,
                    &quot;nome&quot;: &quot;Jessica Pfannerstill&quot;,
                    &quot;descricao&quot;: &quot;Necessitatibus nam eius facilis voluptates tempore non est doloribus.&quot;,
                    &quot;status&quot;: &quot;Inativo&quot;,
                    &quot;created_at&quot;: &quot;2025-12-15T00:56:15.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:56:15.000000Z&quot;,
                    &quot;created_by&quot;: &quot;01kcfr43e5s76hfsvv1avd9bq8&quot;,
                    &quot;updated_by&quot;: &quot;01kcfr43kv2gqngsc9ys8eeke1&quot;
                }
            },
            {
                &quot;id&quot;: 5,
                &quot;title&quot;: &quot;Ipsum tempora consequatur quis repellendus.&quot;,
                &quot;content&quot;: &quot;Consectetur corrupti inventore qui et nam architecto consequuntur. Consequuntur laudantium voluptatum rerum quisquam. Deserunt maxime illo aperiam. Nesciunt facere culpa et et.&quot;,
                &quot;correction&quot;: &quot;Ut vel sed accusamus error qui qui. Sit libero recusandae sint quisquam. Consequatur dolorem sunt aut consequuntur alias maiores veniam omnis.&quot;,
                &quot;materia_id&quot;: 25,
                &quot;created_by&quot;: &quot;01kcfr43ze18k7fxk0d6sff1qt&quot;,
                &quot;updated_by&quot;: &quot;01kcfr43ss4b60ccavdr40dyaq&quot;,
                &quot;type&quot;: &quot;VerdadeiroFalso&quot;,
                &quot;status&quot;: &quot;Active&quot;,
                &quot;created_at&quot;: &quot;2025-12-15T00:56:20.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-12-15T00:56:20.000000Z&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: &quot;01kcfr43ze18k7fxk0d6sff1qt&quot;,
                    &quot;name&quot;: &quot;Mr. Jan Gulgowski&quot;,
                    &quot;email&quot;: &quot;caden.deckow@example.com&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;banned&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:56:16.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:56:16.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: &quot;01kcfr43ss4b60ccavdr40dyaq&quot;,
                    &quot;name&quot;: &quot;Prof. Kenyatta Gislason&quot;,
                    &quot;email&quot;: &quot;reichert.pietro@example.org&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;active&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:56:15.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:56:15.000000Z&quot;
                },
                &quot;alternatives&quot;: [
                    {
                        &quot;id&quot;: 17,
                        &quot;question_id&quot;: 5,
                        &quot;content&quot;: &quot;Quia alias deleniti ea id.&quot;,
                        &quot;correct&quot;: 1,
                        &quot;created_by&quot;: &quot;01kcfr4dy0d97b5b5g9tmgd0wa&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr4e3pzzdnqs2b65fryaf1&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:27.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:27.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 18,
                        &quot;question_id&quot;: 5,
                        &quot;content&quot;: &quot;Corrupti atque sequi exercitationem ipsum.&quot;,
                        &quot;correct&quot;: 1,
                        &quot;created_by&quot;: &quot;01kcfr4e9fbx9mxxfk3yahb98z&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr4ef6sr8b3317fsjcm8ey&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:27.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:27.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 19,
                        &quot;question_id&quot;: 5,
                        &quot;content&quot;: &quot;Non delectus quo vitae aut nostrum autem eius.&quot;,
                        &quot;correct&quot;: 1,
                        &quot;created_by&quot;: &quot;01kcfr4emwdnqfnwq7bkse9sme&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr4etg2vbbjhn0bqfpht6r&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:27.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:27.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 20,
                        &quot;question_id&quot;: 5,
                        &quot;content&quot;: &quot;Vel quasi voluptatem blanditiis nobis.&quot;,
                        &quot;correct&quot;: 0,
                        &quot;created_by&quot;: &quot;01kcfr4f04vk2qwdazwvw84msw&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr4f5pzz4wncyk45rtaq9f&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:27.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:27.000000Z&quot;
                    }
                ],
                &quot;materia&quot;: {
                    &quot;id&quot;: 25,
                    &quot;nome&quot;: &quot;Montana Batz&quot;,
                    &quot;descricao&quot;: &quot;Aliquid ut dignissimos et.&quot;,
                    &quot;status&quot;: &quot;Ativo&quot;,
                    &quot;created_at&quot;: &quot;2025-12-15T00:56:16.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:56:16.000000Z&quot;,
                    &quot;created_by&quot;: &quot;01kcfr4452nzwmv2hkhnswkv9k&quot;,
                    &quot;updated_by&quot;: &quot;01kcfr44anq2b004h7tmd3rf92&quot;
                }
            },
            {
                &quot;id&quot;: 6,
                &quot;title&quot;: &quot;Voluptatem delectus rerum rem sunt minus qui sed saepe.&quot;,
                &quot;content&quot;: &quot;Quis vel temporibus perspiciatis voluptatem iste omnis. Soluta aut ipsum consequatur nobis delectus autem eum. Voluptate enim quasi nobis quos voluptatum.&quot;,
                &quot;correction&quot;: &quot;Est et mollitia expedita recusandae velit beatae nesciunt. Inventore hic et architecto corrupti labore. Sint vero provident voluptatem architecto autem dolore quisquam.&quot;,
                &quot;materia_id&quot;: 26,
                &quot;created_by&quot;: &quot;01kcfr44pbqfdq94rcf67p78hx&quot;,
                &quot;updated_by&quot;: &quot;01kcfr44gkww9fkzt6mz08vecf&quot;,
                &quot;type&quot;: &quot;Aberta&quot;,
                &quot;status&quot;: &quot;Active&quot;,
                &quot;created_at&quot;: &quot;2025-12-15T00:56:20.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-12-15T00:56:20.000000Z&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: &quot;01kcfr44pbqfdq94rcf67p78hx&quot;,
                    &quot;name&quot;: &quot;Jaime Brown&quot;,
                    &quot;email&quot;: &quot;elinor32@example.net&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;active&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:56:16.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:56:16.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: &quot;01kcfr44gkww9fkzt6mz08vecf&quot;,
                    &quot;name&quot;: &quot;Antone Auer&quot;,
                    &quot;email&quot;: &quot;ucremin@example.net&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;inactive&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:56:16.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:56:16.000000Z&quot;
                },
                &quot;alternatives&quot;: [
                    {
                        &quot;id&quot;: 21,
                        &quot;question_id&quot;: 6,
                        &quot;content&quot;: &quot;Assumenda error quia rem veritatis sequi.&quot;,
                        &quot;correct&quot;: 1,
                        &quot;created_by&quot;: &quot;01kcfr4fbxxeaganyq013edf2n&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr4fhh9vczc24q7cqxvtdr&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:29.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:29.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 22,
                        &quot;question_id&quot;: 6,
                        &quot;content&quot;: &quot;Debitis optio consequatur ipsam ratione temporibus et.&quot;,
                        &quot;correct&quot;: 0,
                        &quot;created_by&quot;: &quot;01kcfr4fqbgzge30z68c46zeyh&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr4fwyke6ndr13gtzzw1f6&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:29.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:29.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 23,
                        &quot;question_id&quot;: 6,
                        &quot;content&quot;: &quot;Accusantium adipisci tenetur est aliquid modi.&quot;,
                        &quot;correct&quot;: 1,
                        &quot;created_by&quot;: &quot;01kcfr4g2k9sempsdb8jh61ws3&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr4g86ratkwy8640jwpafy&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:29.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:29.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 24,
                        &quot;question_id&quot;: 6,
                        &quot;content&quot;: &quot;Sequi dolorem expedita aut eius consequatur consequatur cum.&quot;,
                        &quot;correct&quot;: 1,
                        &quot;created_by&quot;: &quot;01kcfr4gdtzfxz0ckjj624j736&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr4gkf5m4n3fn4rggmdx79&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:29.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:29.000000Z&quot;
                    }
                ],
                &quot;materia&quot;: {
                    &quot;id&quot;: 26,
                    &quot;nome&quot;: &quot;Ernie Fahey&quot;,
                    &quot;descricao&quot;: &quot;In nihil ab quia praesentium.&quot;,
                    &quot;status&quot;: &quot;Inativo&quot;,
                    &quot;created_at&quot;: &quot;2025-12-15T00:56:17.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:56:17.000000Z&quot;,
                    &quot;created_by&quot;: &quot;01kcfr44w1g5aqzeg9wqph4v8y&quot;,
                    &quot;updated_by&quot;: &quot;01kcfr451r7xmr3472y7713hts&quot;
                }
            },
            {
                &quot;id&quot;: 7,
                &quot;title&quot;: &quot;Architecto ad aliquid maxime quod ipsum.&quot;,
                &quot;content&quot;: &quot;A et accusamus ea debitis rerum quibusdam. Nemo voluptates et sint reiciendis. Et necessitatibus velit libero non architecto. Nostrum non sint quod.&quot;,
                &quot;correction&quot;: &quot;Rerum in in pariatur assumenda sit tempore sed exercitationem. Consequatur voluptas aliquam officia reprehenderit aut. Et officiis dolore consequatur voluptatem magnam. Autem consequatur perferendis tempore. Earum fuga qui aliquid.&quot;,
                &quot;materia_id&quot;: 27,
                &quot;created_by&quot;: &quot;01kcfr45d9tsgkvzn4f8x2xxgg&quot;,
                &quot;updated_by&quot;: &quot;01kcfr457hexkh636vwg00p0hj&quot;,
                &quot;type&quot;: &quot;Multipla&quot;,
                &quot;status&quot;: &quot;Inactive&quot;,
                &quot;created_at&quot;: &quot;2025-12-15T00:56:20.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-12-15T00:56:20.000000Z&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: &quot;01kcfr45d9tsgkvzn4f8x2xxgg&quot;,
                    &quot;name&quot;: &quot;Angela Casper&quot;,
                    &quot;email&quot;: &quot;kunde.christopher@example.com&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;inactive&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:56:17.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:56:17.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: &quot;01kcfr457hexkh636vwg00p0hj&quot;,
                    &quot;name&quot;: &quot;Dr. Guido Haley&quot;,
                    &quot;email&quot;: &quot;jschoen@example.net&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;inactive&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:56:17.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:56:17.000000Z&quot;
                },
                &quot;alternatives&quot;: [
                    {
                        &quot;id&quot;: 25,
                        &quot;question_id&quot;: 7,
                        &quot;content&quot;: &quot;Sunt error veritatis facere placeat aliquam recusandae.&quot;,
                        &quot;correct&quot;: 1,
                        &quot;created_by&quot;: &quot;01kcfr4gspgd80f6ws75rfknqx&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr4gzcntps8yfggbzjcdte&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:30.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:30.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 26,
                        &quot;question_id&quot;: 7,
                        &quot;content&quot;: &quot;Velit illum eos voluptatem quia.&quot;,
                        &quot;correct&quot;: 0,
                        &quot;created_by&quot;: &quot;01kcfr4h510db6n5q9pgqk9j8r&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr4haqbgbsam8vtb2g5gmp&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:30.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:30.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 27,
                        &quot;question_id&quot;: 7,
                        &quot;content&quot;: &quot;Blanditiis voluptatem at iure voluptatum.&quot;,
                        &quot;correct&quot;: 1,
                        &quot;created_by&quot;: &quot;01kcfr4hggzfx4q2erbtt4ew28&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr4hp7zpxas48fpd8qjffz&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:30.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:30.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 28,
                        &quot;question_id&quot;: 7,
                        &quot;content&quot;: &quot;Qui minima inventore est error repudiandae harum ut.&quot;,
                        &quot;correct&quot;: 0,
                        &quot;created_by&quot;: &quot;01kcfr4hvtcjs8qd64ct2hjvjf&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr4j1dpme1rmwy09hbzpxs&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:30.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:30.000000Z&quot;
                    }
                ],
                &quot;materia&quot;: {
                    &quot;id&quot;: 27,
                    &quot;nome&quot;: &quot;Dr. Tad Thiel&quot;,
                    &quot;descricao&quot;: &quot;Nulla beatae eum voluptatem saepe.&quot;,
                    &quot;status&quot;: &quot;Ativo&quot;,
                    &quot;created_at&quot;: &quot;2025-12-15T00:56:17.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:56:17.000000Z&quot;,
                    &quot;created_by&quot;: &quot;01kcfr45k5fm2effwgs7gq259h&quot;,
                    &quot;updated_by&quot;: &quot;01kcfr45ryksx53fhac81fvt5x&quot;
                }
            },
            {
                &quot;id&quot;: 8,
                &quot;title&quot;: &quot;Exercitationem non perspiciatis fugit et et reprehenderit enim.&quot;,
                &quot;content&quot;: &quot;Et rerum et est sit. Voluptas ab voluptatem excepturi eum consequatur dolor. Facere recusandae qui autem reiciendis.&quot;,
                &quot;correction&quot;: &quot;Aperiam fugiat dignissimos doloribus. Quia ut ad natus id. Nostrum fugiat dicta quisquam facilis sunt sed. Est placeat maiores excepturi commodi unde.&quot;,
                &quot;materia_id&quot;: 28,
                &quot;created_by&quot;: &quot;01kcfr464qxjsd49tnkak9cmap&quot;,
                &quot;updated_by&quot;: &quot;01kcfr45z38ynfwtk7ww219kaf&quot;,
                &quot;type&quot;: &quot;Multipla&quot;,
                &quot;status&quot;: &quot;Inactive&quot;,
                &quot;created_at&quot;: &quot;2025-12-15T00:56:20.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-12-15T00:56:20.000000Z&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: &quot;01kcfr464qxjsd49tnkak9cmap&quot;,
                    &quot;name&quot;: &quot;Vince Gutkowski&quot;,
                    &quot;email&quot;: &quot;marilyne21@example.org&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;inactive&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:56:18.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:56:18.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: &quot;01kcfr45z38ynfwtk7ww219kaf&quot;,
                    &quot;name&quot;: &quot;Ebba Halvorson&quot;,
                    &quot;email&quot;: &quot;keeling.samantha@example.com&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;banned&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:56:18.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:56:18.000000Z&quot;
                },
                &quot;alternatives&quot;: [
                    {
                        &quot;id&quot;: 29,
                        &quot;question_id&quot;: 8,
                        &quot;content&quot;: &quot;Nam enim culpa nostrum est.&quot;,
                        &quot;correct&quot;: 1,
                        &quot;created_by&quot;: &quot;01kcfr4j7nccasf4g9y4x67969&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr4jd81j1s6rzqwprxxbfs&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:31.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:31.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 30,
                        &quot;question_id&quot;: 8,
                        &quot;content&quot;: &quot;Voluptatem qui amet asperiores magni et et sequi.&quot;,
                        &quot;correct&quot;: 1,
                        &quot;created_by&quot;: &quot;01kcfr4jjvm9v48qmx5jwgms1v&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr4jrgzqn9k5tvysyr03nt&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:31.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:31.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 31,
                        &quot;question_id&quot;: 8,
                        &quot;content&quot;: &quot;Maxime eum odit est illum.&quot;,
                        &quot;correct&quot;: 0,
                        &quot;created_by&quot;: &quot;01kcfr4jy44gks0z3jbb8eennn&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr4k3qrcndzg0vdv5ag2tv&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:31.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:31.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 32,
                        &quot;question_id&quot;: 8,
                        &quot;content&quot;: &quot;Et nisi aut voluptatum nulla est omnis.&quot;,
                        &quot;correct&quot;: 0,
                        &quot;created_by&quot;: &quot;01kcfr4k9bp6ekwestgfxzvcr7&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr4kf0xbps5mhjvh7chz0s&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:31.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:31.000000Z&quot;
                    }
                ],
                &quot;materia&quot;: {
                    &quot;id&quot;: 28,
                    &quot;nome&quot;: &quot;Prof. Jordi Schimmel&quot;,
                    &quot;descricao&quot;: &quot;Omnis dignissimos voluptatibus ut qui corrupti est cupiditate.&quot;,
                    &quot;status&quot;: &quot;Inativo&quot;,
                    &quot;created_at&quot;: &quot;2025-12-15T00:56:18.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:56:18.000000Z&quot;,
                    &quot;created_by&quot;: &quot;01kcfr46ab04tcf0pk7b4x8tp6&quot;,
                    &quot;updated_by&quot;: &quot;01kcfr46g3g1c3zkdg3m3k2b4y&quot;
                }
            },
            {
                &quot;id&quot;: 9,
                &quot;title&quot;: &quot;Odio quo labore explicabo consequuntur aut.&quot;,
                &quot;content&quot;: &quot;Ut molestiae officia ea. Est repudiandae quis ea velit voluptatem dolor laboriosam illum. Nam ab est est ad ut qui numquam.&quot;,
                &quot;correction&quot;: &quot;Et eum saepe nisi ullam aliquam. Blanditiis hic reiciendis quis maiores harum velit assumenda. Aut quas qui sed inventore. Ipsa velit ut minima et sint facilis.&quot;,
                &quot;materia_id&quot;: 29,
                &quot;created_by&quot;: &quot;01kcfr46vr32ryzavnvbg84hja&quot;,
                &quot;updated_by&quot;: &quot;01kcfr46p20zhwn93fvdntdjmk&quot;,
                &quot;type&quot;: &quot;Multipla&quot;,
                &quot;status&quot;: &quot;Active&quot;,
                &quot;created_at&quot;: &quot;2025-12-15T00:56:20.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-12-15T00:56:20.000000Z&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: &quot;01kcfr46vr32ryzavnvbg84hja&quot;,
                    &quot;name&quot;: &quot;Mrs. Alexandria Marks I&quot;,
                    &quot;email&quot;: &quot;celine.pollich@example.org&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;active&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:56:19.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:56:19.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: &quot;01kcfr46p20zhwn93fvdntdjmk&quot;,
                    &quot;name&quot;: &quot;Javier Hamill&quot;,
                    &quot;email&quot;: &quot;kip.aufderhar@example.org&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;inactive&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:56:18.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:56:18.000000Z&quot;
                },
                &quot;alternatives&quot;: [
                    {
                        &quot;id&quot;: 33,
                        &quot;question_id&quot;: 9,
                        &quot;content&quot;: &quot;Consectetur iusto unde cupiditate voluptate rem expedita dignissimos.&quot;,
                        &quot;correct&quot;: 1,
                        &quot;created_by&quot;: &quot;01kcfr4kng11k5fbhrsdjxjesr&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr4kv5w82y2x7zty8v2e65&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:33.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:33.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 34,
                        &quot;question_id&quot;: 9,
                        &quot;content&quot;: &quot;Soluta accusamus blanditiis facilis.&quot;,
                        &quot;correct&quot;: 0,
                        &quot;created_by&quot;: &quot;01kcfr4m0tqxmn3b4aknrca1c4&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr4m6dxkx8c2tb8jbcjjsk&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:33.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:33.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 35,
                        &quot;question_id&quot;: 9,
                        &quot;content&quot;: &quot;Impedit voluptatibus suscipit iusto excepturi est.&quot;,
                        &quot;correct&quot;: 1,
                        &quot;created_by&quot;: &quot;01kcfr4mc247b2rv53a729tds2&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr4mhrejwzgywm10r4mq6j&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:33.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:33.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 36,
                        &quot;question_id&quot;: 9,
                        &quot;content&quot;: &quot;Est ad rerum totam et mollitia recusandae quia.&quot;,
                        &quot;correct&quot;: 0,
                        &quot;created_by&quot;: &quot;01kcfr4mqdaxceyx9axgc32m21&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr4mx1tasr41cr9607bhfr&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:33.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:33.000000Z&quot;
                    }
                ],
                &quot;materia&quot;: {
                    &quot;id&quot;: 29,
                    &quot;nome&quot;: &quot;Cecile Herzog&quot;,
                    &quot;descricao&quot;: &quot;Asperiores corrupti ratione quo ducimus ipsum in.&quot;,
                    &quot;status&quot;: &quot;Inativo&quot;,
                    &quot;created_at&quot;: &quot;2025-12-15T00:56:19.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:56:19.000000Z&quot;,
                    &quot;created_by&quot;: &quot;01kcfr471c4kc09j7j9pg4m6b1&quot;,
                    &quot;updated_by&quot;: &quot;01kcfr476z1yq3qxeqrb5rpd2v&quot;
                }
            },
            {
                &quot;id&quot;: 10,
                &quot;title&quot;: &quot;Optio qui fuga repellendus veniam illo doloribus ullam aliquam.&quot;,
                &quot;content&quot;: &quot;Cum provident dolorem soluta. Pariatur voluptatem aut in nesciunt rem impedit. Aut nisi ipsa ea repudiandae sunt beatae molestiae omnis. Impedit sint et qui vel itaque soluta.&quot;,
                &quot;correction&quot;: &quot;Et a facilis eius veritatis doloremque hic laborum. Fugiat error rerum illo provident qui ratione quasi. Et ratione vel ea aliquam. Dolore quae distinctio non id voluptatibus nemo. Consectetur placeat magnam eos tenetur.&quot;,
                &quot;materia_id&quot;: 30,
                &quot;created_by&quot;: &quot;01kcfr47jacsxj8m00j249m1n3&quot;,
                &quot;updated_by&quot;: &quot;01kcfr47cpka773q920vbvd6sg&quot;,
                &quot;type&quot;: &quot;Aberta&quot;,
                &quot;status&quot;: &quot;Active&quot;,
                &quot;created_at&quot;: &quot;2025-12-15T00:56:20.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-12-15T00:56:20.000000Z&quot;,
                &quot;creator&quot;: {
                    &quot;id&quot;: &quot;01kcfr47jacsxj8m00j249m1n3&quot;,
                    &quot;name&quot;: &quot;Tierra Jaskolski&quot;,
                    &quot;email&quot;: &quot;frida.beier@example.org&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;active&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:56:19.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:56:19.000000Z&quot;
                },
                &quot;last_editor&quot;: {
                    &quot;id&quot;: &quot;01kcfr47cpka773q920vbvd6sg&quot;,
                    &quot;name&quot;: &quot;Hosea Strosin&quot;,
                    &quot;email&quot;: &quot;raina62@example.net&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;inactive&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:56:19.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:56:19.000000Z&quot;
                },
                &quot;alternatives&quot;: [
                    {
                        &quot;id&quot;: 37,
                        &quot;question_id&quot;: 10,
                        &quot;content&quot;: &quot;Aliquam veniam dolorem nisi quos aperiam.&quot;,
                        &quot;correct&quot;: 0,
                        &quot;created_by&quot;: &quot;01kcfr4n3bxzaqh4at1zs8wda2&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr4n8ywy7gv5nfam8ypeg3&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:34.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:34.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 38,
                        &quot;question_id&quot;: 10,
                        &quot;content&quot;: &quot;Eos possimus aut inventore.&quot;,
                        &quot;correct&quot;: 1,
                        &quot;created_by&quot;: &quot;01kcfr4nej112n7sechptx1k6e&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr4nm5zzh1gfpb75cm5mfz&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:34.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:34.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 39,
                        &quot;question_id&quot;: 10,
                        &quot;content&quot;: &quot;Facilis enim aut saepe nesciunt.&quot;,
                        &quot;correct&quot;: 1,
                        &quot;created_by&quot;: &quot;01kcfr4nssb583gmfkzvkwb5q8&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr4nzh814ean4v4njx9pn3&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:34.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:34.000000Z&quot;
                    },
                    {
                        &quot;id&quot;: 40,
                        &quot;question_id&quot;: 10,
                        &quot;content&quot;: &quot;Temporibus quia quod molestias ut minima.&quot;,
                        &quot;correct&quot;: 0,
                        &quot;created_by&quot;: &quot;01kcfr4p57ckk2bpwtntgeqrqs&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr4paw8bv2z6rjwn082ftk&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:34.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:34.000000Z&quot;
                    }
                ],
                &quot;materia&quot;: {
                    &quot;id&quot;: 30,
                    &quot;nome&quot;: &quot;Lola Keeling&quot;,
                    &quot;descricao&quot;: &quot;Explicabo dolor nobis voluptatem voluptas aut corporis in.&quot;,
                    &quot;status&quot;: &quot;Inativo&quot;,
                    &quot;created_at&quot;: &quot;2025-12-15T00:56:20.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:56:20.000000Z&quot;,
                    &quot;created_by&quot;: &quot;01kcfr47r0yhx5g8r2rqwwdhqq&quot;,
                    &quot;updated_by&quot;: &quot;01kcfr47xnr2hvzfjsks97zw8q&quot;
                }
            }
        ],
        &quot;first_page_url&quot;: &quot;http://localhost:8000/api/questoes?page=1&quot;,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 12,
        &quot;last_page_url&quot;: &quot;http://localhost:8000/api/questoes?page=12&quot;,
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
                &quot;url&quot;: &quot;http://localhost:8000/api/questoes?page=11&quot;,
                &quot;label&quot;: &quot;11&quot;,
                &quot;page&quot;: 11,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/questoes?page=12&quot;,
                &quot;label&quot;: &quot;12&quot;,
                &quot;page&quot;: 12,
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
        &quot;total&quot;: 119
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
                &quot;id&quot;: 1,
                &quot;title&quot;: &quot;Simulado - ut&quot;,
                &quot;description&quot;: &quot;Fugiat dignissimos ut et quaerat voluptatibus. Incidunt ut et ea consectetur facilis.&quot;,
                &quot;subject_id&quot;: 31,
                &quot;type&quot;: &quot;Simulation&quot;,
                &quot;due_date&quot;: &quot;2025-12-21T15:26:22.000000Z&quot;,
                &quot;created_by&quot;: {
                    &quot;id&quot;: &quot;01kcfr4ph7wfeq18gz9k9qjhpz&quot;,
                    &quot;name&quot;: &quot;Wilbert Feest&quot;,
                    &quot;email&quot;: &quot;marjory75@example.org&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;active&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:56:35.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:56:35.000000Z&quot;
                },
                &quot;updated_by&quot;: {
                    &quot;id&quot;: &quot;01kcfr4ph7wfeq18gz9k9qjhpz&quot;,
                    &quot;name&quot;: &quot;Wilbert Feest&quot;,
                    &quot;email&quot;: &quot;marjory75@example.org&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;active&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:56:35.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:56:35.000000Z&quot;
                },
                &quot;status&quot;: &quot;Inactive&quot;,
                &quot;created_at&quot;: &quot;2025-12-15T00:56:36.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-12-15T00:56:36.000000Z&quot;,
                &quot;questions&quot;: [
                    {
                        &quot;id&quot;: 11,
                        &quot;title&quot;: &quot;Soluta odio aut deserunt ipsa veniam culpa tenetur.&quot;,
                        &quot;content&quot;: &quot;Iure labore temporibus nostrum voluptatem vel. Quibusdam praesentium incidunt itaque est ut. Rerum recusandae ipsam natus libero velit consequatur earum. Odio voluptas minus qui pariatur accusantium ad minus dignissimos.&quot;,
                        &quot;correction&quot;: &quot;Quod eos nobis possimus officia blanditiis. Reiciendis aut dicta ut veniam nobis voluptatem. Fuga distinctio provident quis. Est quo dolores dolorem et.&quot;,
                        &quot;materia_id&quot;: 31,
                        &quot;created_by&quot;: &quot;01kcfr4rb8x67pgbmvc6ck4e9b&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr4r5ja9v10dhb688jb9mm&quot;,
                        &quot;type&quot;: &quot;VerdadeiroFalso&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:39.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:39.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 1,
                            &quot;question_id&quot;: 11,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 1,
                            &quot;created_by&quot;: &quot;01kcfr4ph7wfeq18gz9k9qjhpz&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr4ph7wfeq18gz9k9qjhpz&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:56:53.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:56:53.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 12,
                        &quot;title&quot;: &quot;Ipsa eos ut qui sequi atque.&quot;,
                        &quot;content&quot;: &quot;Aliquid consequatur porro qui cum. Earum esse voluptatum minima exercitationem eos. Blanditiis accusantium quisquam praesentium ipsa. Et sapiente qui aut est. Doloremque commodi sunt odit voluptates sed.&quot;,
                        &quot;correction&quot;: &quot;Excepturi consequatur laborum architecto unde. Iste delectus necessitatibus quidem repellat vel sunt. Nesciunt at est dolorum aut sint architecto qui. Pariatur adipisci sint et quod ducimus fugiat qui doloribus.&quot;,
                        &quot;materia_id&quot;: 31,
                        &quot;created_by&quot;: &quot;01kcfr4rpq17fwf76bmmywegdk&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr4rh0f37ywwb3yk0m6zrc&quot;,
                        &quot;type&quot;: &quot;Multipla&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:39.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:39.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 1,
                            &quot;question_id&quot;: 12,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 2,
                            &quot;created_by&quot;: &quot;01kcfr4ph7wfeq18gz9k9qjhpz&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr4ph7wfeq18gz9k9qjhpz&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:56:53.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:56:53.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 14,
                        &quot;title&quot;: &quot;Dolor et sapiente nesciunt qui delectus autem quas.&quot;,
                        &quot;content&quot;: &quot;Laboriosam deserunt cumque quam qui ipsam. Consequatur dolor qui ipsa adipisci. Nesciunt laudantium sit accusantium ut. Et deleniti aut optio voluptatum nobis iusto. Voluptas autem quia totam sit laudantium.&quot;,
                        &quot;correction&quot;: &quot;Nesciunt molestiae aperiam possimus nobis consequatur. Minima quis aut neque suscipit. Soluta at aut consectetur sequi ipsum est dolor.&quot;,
                        &quot;materia_id&quot;: 31,
                        &quot;created_by&quot;: &quot;01kcfr4sdkcsj7zdbrgjy4zy88&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr4s80xjzk9k6s1j6hk7ej&quot;,
                        &quot;type&quot;: &quot;VerdadeiroFalso&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:39.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:39.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 1,
                            &quot;question_id&quot;: 14,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 4,
                            &quot;created_by&quot;: &quot;01kcfr4ph7wfeq18gz9k9qjhpz&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr4ph7wfeq18gz9k9qjhpz&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:56:53.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:56:53.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 15,
                        &quot;title&quot;: &quot;Numquam voluptates quas voluptas temporibus.&quot;,
                        &quot;content&quot;: &quot;Dolores sunt minus eaque veritatis aut enim qui. Voluptatem ratione sed sapiente eum tenetur ratione praesentium sint. Culpa voluptates nisi laborum illo quasi quisquam cum autem.&quot;,
                        &quot;correction&quot;: &quot;Repudiandae quis quia cupiditate earum inventore facilis et ab. Ex blanditiis consequatur minus qui porro est sapiente. Sed eos est labore vitae sunt.&quot;,
                        &quot;materia_id&quot;: 31,
                        &quot;created_by&quot;: &quot;01kcfr4srxxdwtp5wam5m7g3zr&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr4sk8jqthtfcpfzc1z6fa&quot;,
                        &quot;type&quot;: &quot;Multipla&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:39.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:39.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 1,
                            &quot;question_id&quot;: 15,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 5,
                            &quot;created_by&quot;: &quot;01kcfr4ph7wfeq18gz9k9qjhpz&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr4ph7wfeq18gz9k9qjhpz&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:56:53.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:56:53.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 16,
                        &quot;title&quot;: &quot;Animi esse itaque aperiam labore asperiores.&quot;,
                        &quot;content&quot;: &quot;Sed est aut doloremque qui. Aliquam odio voluptate porro.&quot;,
                        &quot;correction&quot;: &quot;Impedit doloribus voluptatum et. Id iste in nisi et et aspernatur. Eius minus maxime aperiam qui.&quot;,
                        &quot;materia_id&quot;: 31,
                        &quot;created_by&quot;: &quot;01kcfr4t47c0qncchc0z88y5b3&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr4syj03wkcnqpy4a0kz9h&quot;,
                        &quot;type&quot;: &quot;Aberta&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:39.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:39.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 1,
                            &quot;question_id&quot;: 16,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 6,
                            &quot;created_by&quot;: &quot;01kcfr4ph7wfeq18gz9k9qjhpz&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr4ph7wfeq18gz9k9qjhpz&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:56:53.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:56:53.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 18,
                        &quot;title&quot;: &quot;Beatae laboriosam aut commodi hic odio.&quot;,
                        &quot;content&quot;: &quot;Eaque voluptatem dolorum ipsum magnam qui aut quisquam. Quaerat aut fuga cupiditate sit. Optio esse consequatur et placeat mollitia. Eaque doloremque dolor dolorem tenetur unde velit eum occaecati.&quot;,
                        &quot;correction&quot;: &quot;Aliquam quis iure ut. Cum ex earum amet dolorem dignissimos iure. Eum itaque odio eveniet sapiente repudiandae quam. Quis sit officia voluptatem.&quot;,
                        &quot;materia_id&quot;: 31,
                        &quot;created_by&quot;: &quot;01kcfr4tty1xy4b9dj9rb8mjat&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr4tn8y37bm39xv3xxc6n3&quot;,
                        &quot;type&quot;: &quot;Aberta&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:39.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:39.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 1,
                            &quot;question_id&quot;: 18,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 8,
                            &quot;created_by&quot;: &quot;01kcfr4ph7wfeq18gz9k9qjhpz&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr4ph7wfeq18gz9k9qjhpz&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:56:53.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:56:53.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 19,
                        &quot;title&quot;: &quot;Id debitis voluptatum nisi veniam labore.&quot;,
                        &quot;content&quot;: &quot;Veritatis nihil ut voluptate omnis rem qui aspernatur. Sunt architecto molestiae earum inventore aut soluta odio.&quot;,
                        &quot;correction&quot;: &quot;In incidunt deserunt repudiandae rerum omnis a provident sint. Qui iusto ipsam quam tempore voluptas assumenda. Quo quidem veritatis qui doloremque aut ipsum. Totam ea veritatis velit ut unde quo eum.&quot;,
                        &quot;materia_id&quot;: 31,
                        &quot;created_by&quot;: &quot;01kcfr4v6brj5jt355sr633wy5&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr4v0njv42rkttm5c0yw1b&quot;,
                        &quot;type&quot;: &quot;Multipla&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:39.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:39.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 1,
                            &quot;question_id&quot;: 19,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 9,
                            &quot;created_by&quot;: &quot;01kcfr4ph7wfeq18gz9k9qjhpz&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr4ph7wfeq18gz9k9qjhpz&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:56:53.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:56:53.000000Z&quot;
                        }
                    }
                ]
            },
            {
                &quot;id&quot;: 2,
                &quot;title&quot;: &quot;Simulado - dolores&quot;,
                &quot;description&quot;: &quot;In aliquam et voluptas veniam. Voluptate vero praesentium itaque voluptas. Laudantium cum aspernatur aperiam aperiam assumenda aut quia esse.&quot;,
                &quot;subject_id&quot;: 32,
                &quot;type&quot;: &quot;Simulation&quot;,
                &quot;due_date&quot;: &quot;2025-12-19T19:41:07.000000Z&quot;,
                &quot;created_by&quot;: {
                    &quot;id&quot;: &quot;01kcfr4q2fv3g9r92d9d178e3x&quot;,
                    &quot;name&quot;: &quot;Eliezer Farrell&quot;,
                    &quot;email&quot;: &quot;rsauer@example.com&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;banned&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:56:35.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:56:35.000000Z&quot;
                },
                &quot;updated_by&quot;: {
                    &quot;id&quot;: &quot;01kcfr4q2fv3g9r92d9d178e3x&quot;,
                    &quot;name&quot;: &quot;Eliezer Farrell&quot;,
                    &quot;email&quot;: &quot;rsauer@example.com&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;banned&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:56:35.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:56:35.000000Z&quot;
                },
                &quot;status&quot;: &quot;Active&quot;,
                &quot;created_at&quot;: &quot;2025-12-15T00:56:36.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-12-15T00:56:36.000000Z&quot;,
                &quot;questions&quot;: [
                    {
                        &quot;id&quot;: 20,
                        &quot;title&quot;: &quot;Esse quia eligendi et consequatur.&quot;,
                        &quot;content&quot;: &quot;Temporibus officia modi dolorem ab quaerat quidem. Eveniet vitae accusamus quia inventore. Voluptatibus voluptatem deserunt autem officiis et dolores possimus. Est quidem ratione sapiente fugit. Quae ex nulla autem quos impedit.&quot;,
                        &quot;correction&quot;: &quot;Eligendi totam quo quia officiis odit cum. Ea sit in quia debitis illo. Repudiandae sit est sit similique.&quot;,
                        &quot;materia_id&quot;: 32,
                        &quot;created_by&quot;: &quot;01kcfr58nf6ysajsxdcg5q67n8&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr58fr3jecfzwq7f2wzp1e&quot;,
                        &quot;type&quot;: &quot;Aberta&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:56.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:56.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 2,
                            &quot;question_id&quot;: 20,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 1,
                            &quot;created_by&quot;: &quot;01kcfr4q2fv3g9r92d9d178e3x&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr4q2fv3g9r92d9d178e3x&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:57:10.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:57:10.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 21,
                        &quot;title&quot;: &quot;Ea ut quae qui libero et et.&quot;,
                        &quot;content&quot;: &quot;Odio eos saepe asperiores natus. Tempora animi velit facere unde vel itaque. Doloremque in et est non. Quisquam temporibus ut optio officia sapiente impedit totam.&quot;,
                        &quot;correction&quot;: &quot;Et omnis dolores rerum exercitationem et labore. Ut placeat nam sed dignissimos. Cupiditate magni labore deleniti iste ut et cumque.&quot;,
                        &quot;materia_id&quot;: 32,
                        &quot;created_by&quot;: &quot;01kcfr590r9hhggtk8ebtvnevj&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr58v50276btphr8exckp4&quot;,
                        &quot;type&quot;: &quot;Multipla&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:56.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:56.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 2,
                            &quot;question_id&quot;: 21,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 2,
                            &quot;created_by&quot;: &quot;01kcfr4q2fv3g9r92d9d178e3x&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr4q2fv3g9r92d9d178e3x&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:57:10.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:57:10.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 22,
                        &quot;title&quot;: &quot;Amet consequatur tempora et sed qui suscipit quia.&quot;,
                        &quot;content&quot;: &quot;Quia modi exercitationem beatae itaque hic laborum. Sit ea ipsum exercitationem quia. Amet optio blanditiis ad laboriosam dolore. Maxime est officia assumenda voluptas esse delectus.&quot;,
                        &quot;correction&quot;: &quot;Possimus eius eveniet impedit animi non occaecati et sit. Enim odit maxime sequi laboriosam ut cum. Est aut asperiores repudiandae atque molestiae esse.&quot;,
                        &quot;materia_id&quot;: 32,
                        &quot;created_by&quot;: &quot;01kcfr59c3rbekvksbej4r21aj&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr596gpt8bgsmfdgbt0yp5&quot;,
                        &quot;type&quot;: &quot;VerdadeiroFalso&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:56.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:56.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 2,
                            &quot;question_id&quot;: 22,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 3,
                            &quot;created_by&quot;: &quot;01kcfr4q2fv3g9r92d9d178e3x&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr4q2fv3g9r92d9d178e3x&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:57:10.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:57:10.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 23,
                        &quot;title&quot;: &quot;Non labore enim possimus illum nam quia qui.&quot;,
                        &quot;content&quot;: &quot;Et eveniet beatae voluptatibus praesentium dolor et. Odit excepturi fugit voluptatibus neque aut corporis. Beatae eveniet dignissimos voluptatem nobis facere ipsam deserunt ex. Qui ipsum alias ut asperiores.&quot;,
                        &quot;correction&quot;: &quot;Fugiat amet eveniet quibusdam nemo quo. Enim ex natus deserunt. Quis qui et et labore.&quot;,
                        &quot;materia_id&quot;: 32,
                        &quot;created_by&quot;: &quot;01kcfr59rdja7q6zhrdkvh3e5z&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr59j4j7t3f26yxy7810kd&quot;,
                        &quot;type&quot;: &quot;VerdadeiroFalso&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:56.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:56.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 2,
                            &quot;question_id&quot;: 23,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 4,
                            &quot;created_by&quot;: &quot;01kcfr4q2fv3g9r92d9d178e3x&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr4q2fv3g9r92d9d178e3x&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:57:10.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:57:10.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 24,
                        &quot;title&quot;: &quot;Dolor et quo voluptatem quos commodi quia.&quot;,
                        &quot;content&quot;: &quot;Aut est rerum aperiam totam soluta voluptatem. Sed numquam tempora eos voluptatum. Sunt ut harum eos est et qui quia. Sit et qui non et adipisci vero.&quot;,
                        &quot;correction&quot;: &quot;Quasi quidem labore est. Pariatur itaque officiis nihil eveniet nihil rerum voluptates incidunt. Dicta omnis doloribus quisquam aut odio autem sit ad. Error omnis cum cumque minima quasi suscipit facere.&quot;,
                        &quot;materia_id&quot;: 32,
                        &quot;created_by&quot;: &quot;01kcfr5a3w31eyktb56wh3jnvj&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr59y8ssbevk6fvb4gfbbp&quot;,
                        &quot;type&quot;: &quot;Aberta&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:56.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:56.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 2,
                            &quot;question_id&quot;: 24,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 5,
                            &quot;created_by&quot;: &quot;01kcfr4q2fv3g9r92d9d178e3x&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr4q2fv3g9r92d9d178e3x&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:57:10.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:57:10.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 26,
                        &quot;title&quot;: &quot;Et occaecati et quam.&quot;,
                        &quot;content&quot;: &quot;Animi quae in earum vel dolor voluptatem magni. Architecto similique facilis et quod dolorem.&quot;,
                        &quot;correction&quot;: &quot;Animi aut voluptatum est reprehenderit. Autem tempora eius facilis delectus. Praesentium voluptas porro nihil at. Qui aspernatur dolore eum non qui hic qui.&quot;,
                        &quot;materia_id&quot;: 32,
                        &quot;created_by&quot;: &quot;01kcfr5atvrvjgjrvg2d8nktr7&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr5an0n5sxg1q84qm76zmp&quot;,
                        &quot;type&quot;: &quot;VerdadeiroFalso&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:56.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:56.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 2,
                            &quot;question_id&quot;: 26,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 7,
                            &quot;created_by&quot;: &quot;01kcfr4q2fv3g9r92d9d178e3x&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr4q2fv3g9r92d9d178e3x&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:57:10.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:57:10.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 27,
                        &quot;title&quot;: &quot;Totam aut voluptatem placeat.&quot;,
                        &quot;content&quot;: &quot;Earum nisi cupiditate dolorum sit quod non ratione tempore. Minus vero dicta exercitationem.&quot;,
                        &quot;correction&quot;: &quot;Unde et facilis optio ea id ipsam quaerat. Animi sit sit ut aliquid rerum assumenda et nihil. Ut et neque quisquam. Rerum doloribus rerum at ducimus esse.&quot;,
                        &quot;materia_id&quot;: 32,
                        &quot;created_by&quot;: &quot;01kcfr5b6a7xfqqzgb5artmtr5&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr5b0jykzfsmch8fjnacfs&quot;,
                        &quot;type&quot;: &quot;Multipla&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:56:56.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:56:56.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 2,
                            &quot;question_id&quot;: 27,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 8,
                            &quot;created_by&quot;: &quot;01kcfr4q2fv3g9r92d9d178e3x&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr4q2fv3g9r92d9d178e3x&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:57:10.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:57:10.000000Z&quot;
                        }
                    }
                ]
            },
            {
                &quot;id&quot;: 3,
                &quot;title&quot;: &quot;Simulado - ipsa&quot;,
                &quot;description&quot;: &quot;Eum dolorem at vel totam dolor excepturi. Eum alias dolor dignissimos sequi provident est. Quod et debitis numquam mollitia.&quot;,
                &quot;subject_id&quot;: 33,
                &quot;type&quot;: &quot;Simulation&quot;,
                &quot;due_date&quot;: &quot;2025-12-20T11:40:23.000000Z&quot;,
                &quot;created_by&quot;: {
                    &quot;id&quot;: &quot;01kcfr4qkm6929gqg1kmshew0g&quot;,
                    &quot;name&quot;: &quot;Marcelino Langosh&quot;,
                    &quot;email&quot;: &quot;bernice.carter@example.org&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;inactive&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:56:36.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:56:36.000000Z&quot;
                },
                &quot;updated_by&quot;: {
                    &quot;id&quot;: &quot;01kcfr4qkm6929gqg1kmshew0g&quot;,
                    &quot;name&quot;: &quot;Marcelino Langosh&quot;,
                    &quot;email&quot;: &quot;bernice.carter@example.org&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;inactive&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:56:36.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:56:36.000000Z&quot;
                },
                &quot;status&quot;: &quot;Inactive&quot;,
                &quot;created_at&quot;: &quot;2025-12-15T00:56:36.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-12-15T00:56:36.000000Z&quot;,
                &quot;questions&quot;: [
                    {
                        &quot;id&quot;: 30,
                        &quot;title&quot;: &quot;Incidunt consequuntur dolor sunt sit molestiae voluptatem architecto eos.&quot;,
                        &quot;content&quot;: &quot;Et deleniti et qui neque autem aut ipsam officia. Voluptatem dolor consequatur explicabo ut accusantium fuga voluptates harum. Eos est est sunt. Nulla tempore ea voluptas qui deleniti quaerat odit.&quot;,
                        &quot;correction&quot;: &quot;Nesciunt possimus exercitationem ipsam voluptatem. Nobis inventore quod et rerum rem voluptatem quam. Facilis voluptas rerum nostrum harum quam eum.&quot;,
                        &quot;materia_id&quot;: 33,
                        &quot;created_by&quot;: &quot;01kcfr5sftszwpgwjg3nrnq8rq&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr5sa5g4q5erjc2x58813d&quot;,
                        &quot;type&quot;: &quot;VerdadeiroFalso&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:57:13.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:57:13.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 3,
                            &quot;question_id&quot;: 30,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 2,
                            &quot;created_by&quot;: &quot;01kcfr4qkm6929gqg1kmshew0g&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr4qkm6929gqg1kmshew0g&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:57:26.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:57:26.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 31,
                        &quot;title&quot;: &quot;At dolor voluptas eveniet sequi quo voluptas.&quot;,
                        &quot;content&quot;: &quot;Nobis molestiae eaque dolorem sed maiores quam omnis. Enim ipsum ex nobis aliquam. Harum sit et est odit rerum.&quot;,
                        &quot;correction&quot;: &quot;Officia quia consequatur id molestiae deleniti aut unde animi. Modi repellat error sed. Ullam earum reiciendis porro reprehenderit quisquam blanditiis harum. Ab illum nulla qui iure ea accusamus voluptatem.&quot;,
                        &quot;materia_id&quot;: 33,
                        &quot;created_by&quot;: &quot;01kcfr5sv65zcdpskcnx2k5rsr&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr5snew94a3wfjj882402w&quot;,
                        &quot;type&quot;: &quot;Multipla&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:57:13.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:57:13.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 3,
                            &quot;question_id&quot;: 31,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 3,
                            &quot;created_by&quot;: &quot;01kcfr4qkm6929gqg1kmshew0g&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr4qkm6929gqg1kmshew0g&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:57:26.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:57:26.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 32,
                        &quot;title&quot;: &quot;Tempore sit quam repudiandae sunt provident voluptatem est velit.&quot;,
                        &quot;content&quot;: &quot;Dolorum ullam sit dolor quo voluptas eligendi labore. Quam incidunt excepturi ad sit nisi sunt. At officiis nihil et rerum iure rerum velit.&quot;,
                        &quot;correction&quot;: &quot;Fuga ullam magni dolorem quod ut consequatur. Blanditiis accusamus aperiam voluptatibus vero unde voluptatum sint commodi. Et sunt optio vel itaque in. Non et sint sed enim tenetur sunt qui itaque.&quot;,
                        &quot;materia_id&quot;: 33,
                        &quot;created_by&quot;: &quot;01kcfr5t6gqksha5mtd1c7kydr&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr5t0tv2108k9j3aajtnre&quot;,
                        &quot;type&quot;: &quot;Multipla&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:57:13.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:57:13.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 3,
                            &quot;question_id&quot;: 32,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 4,
                            &quot;created_by&quot;: &quot;01kcfr4qkm6929gqg1kmshew0g&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr4qkm6929gqg1kmshew0g&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:57:26.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:57:26.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 33,
                        &quot;title&quot;: &quot;Ipsam sit non nemo voluptatem nesciunt similique temporibus.&quot;,
                        &quot;content&quot;: &quot;Quae recusandae maxime adipisci quia repudiandae. Nobis assumenda repellat sit voluptates totam occaecati accusamus. Est recusandae eos blanditiis facere quia. Dolorem eum neque pariatur sed.&quot;,
                        &quot;correction&quot;: &quot;Optio ea qui officia et aut vel. Totam dolor iste distinctio inventore inventore. Omnis doloremque quia quos itaque perspiciatis similique et hic. Nihil corporis dolore eligendi id aspernatur.&quot;,
                        &quot;materia_id&quot;: 33,
                        &quot;created_by&quot;: &quot;01kcfr5thswtd7g41ar30r9dvt&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr5tc5js32aaare8ssh0qd&quot;,
                        &quot;type&quot;: &quot;VerdadeiroFalso&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:57:13.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:57:13.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 3,
                            &quot;question_id&quot;: 33,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 5,
                            &quot;created_by&quot;: &quot;01kcfr4qkm6929gqg1kmshew0g&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr4qkm6929gqg1kmshew0g&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:57:26.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:57:26.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 34,
                        &quot;title&quot;: &quot;Et nihil rerum quae et est dolores.&quot;,
                        &quot;content&quot;: &quot;Et et ex dolor quaerat rerum velit labore. Harum magnam et aut voluptate rerum officia est. Qui numquam eligendi esse. Amet porro dolore pariatur eaque minima.&quot;,
                        &quot;correction&quot;: &quot;Eos illum qui eos dolor. Quis quia porro enim reiciendis blanditiis odit enim. Omnis aut quia est qui odit doloremque dolor.&quot;,
                        &quot;materia_id&quot;: 33,
                        &quot;created_by&quot;: &quot;01kcfr5twzjg31kajrrsmpa0p3&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr5tqdsbv1pktevsvsyq0n&quot;,
                        &quot;type&quot;: &quot;Multipla&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:57:13.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:57:13.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 3,
                            &quot;question_id&quot;: 34,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 6,
                            &quot;created_by&quot;: &quot;01kcfr4qkm6929gqg1kmshew0g&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr4qkm6929gqg1kmshew0g&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:57:26.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:57:26.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 36,
                        &quot;title&quot;: &quot;Asperiores quibusdam pariatur molestiae ipsum iusto porro a.&quot;,
                        &quot;content&quot;: &quot;Debitis nihil commodi ad dignissimos voluptatum rerum qui non. Id quam enim soluta tenetur totam et distinctio. Voluptatem facere ut eligendi inventore quos.&quot;,
                        &quot;correction&quot;: &quot;Natus quo rerum pariatur maiores aut voluptatem. Eos ratione tempora placeat occaecati minus est.&quot;,
                        &quot;materia_id&quot;: 33,
                        &quot;created_by&quot;: &quot;01kcfr5vkr79g3yzn556404qnb&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr5vdzf7dcanmkcwq82qjr&quot;,
                        &quot;type&quot;: &quot;Aberta&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:57:13.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:57:13.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 3,
                            &quot;question_id&quot;: 36,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 8,
                            &quot;created_by&quot;: &quot;01kcfr4qkm6929gqg1kmshew0g&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr4qkm6929gqg1kmshew0g&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:57:26.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:57:26.000000Z&quot;
                        }
                    }
                ]
            },
            {
                &quot;id&quot;: 4,
                &quot;title&quot;: &quot;Prova - quia&quot;,
                &quot;description&quot;: &quot;Debitis fugiat dolore natus quia. Dicta ipsum eligendi consequatur qui laudantium et.&quot;,
                &quot;subject_id&quot;: 34,
                &quot;type&quot;: &quot;Exam&quot;,
                &quot;due_date&quot;: &quot;2025-12-28T21:42:52.000000Z&quot;,
                &quot;created_by&quot;: {
                    &quot;id&quot;: &quot;01kcfr6966cj5dxva9r4nr2yjq&quot;,
                    &quot;name&quot;: &quot;Ernestine Mohr III&quot;,
                    &quot;email&quot;: &quot;paula.bailey@example.net&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;banned&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:57:26.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:57:26.000000Z&quot;
                },
                &quot;updated_by&quot;: {
                    &quot;id&quot;: &quot;01kcfr6966cj5dxva9r4nr2yjq&quot;,
                    &quot;name&quot;: &quot;Ernestine Mohr III&quot;,
                    &quot;email&quot;: &quot;paula.bailey@example.net&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;banned&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:57:26.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:57:26.000000Z&quot;
                },
                &quot;status&quot;: &quot;Active&quot;,
                &quot;created_at&quot;: &quot;2025-12-15T00:57:27.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-12-15T00:57:27.000000Z&quot;,
                &quot;questions&quot;: [
                    {
                        &quot;id&quot;: 38,
                        &quot;title&quot;: &quot;Itaque dolor rem quia ut.&quot;,
                        &quot;content&quot;: &quot;Officiis sapiente aspernatur officiis fugit quasi assumenda cumque dolor. Earum nulla assumenda vel odit dolor. Odit id dolore ipsum.&quot;,
                        &quot;correction&quot;: &quot;Velit et laborum voluptas nostrum. Eum et voluptas perspiciatis aut magnam cum nulla. Et ut est veritatis ut odio qui. Repellat eum et quia dignissimos dicta sed.&quot;,
                        &quot;materia_id&quot;: 34,
                        &quot;created_by&quot;: &quot;01kcfr6aef0cqbjrgvr5ky4p0a&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr6a8wt05z1n7d3bzhanay&quot;,
                        &quot;type&quot;: &quot;Aberta&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:57:34.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:57:34.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 4,
                            &quot;question_id&quot;: 38,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 1,
                            &quot;created_by&quot;: &quot;01kcfr6966cj5dxva9r4nr2yjq&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr6966cj5dxva9r4nr2yjq&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:58:00.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:58:00.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 39,
                        &quot;title&quot;: &quot;Distinctio et et voluptatem rerum debitis non animi porro.&quot;,
                        &quot;content&quot;: &quot;Vel fugiat ratione cupiditate porro dolores. Numquam repellendus accusamus non. Tempora enim tempora veritatis suscipit occaecati.&quot;,
                        &quot;correction&quot;: &quot;Quo assumenda quo ipsam qui. Necessitatibus cupiditate porro voluptatum voluptatem qui. Tempore consectetur sed eos aut.&quot;,
                        &quot;materia_id&quot;: 34,
                        &quot;created_by&quot;: &quot;01kcfr6ass0p6nsvjnkk44zx2v&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr6am5bck1sjgrz00vkedv&quot;,
                        &quot;type&quot;: &quot;Aberta&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:57:34.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:57:34.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 4,
                            &quot;question_id&quot;: 39,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 2,
                            &quot;created_by&quot;: &quot;01kcfr6966cj5dxva9r4nr2yjq&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr6966cj5dxva9r4nr2yjq&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:58:00.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:58:00.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 41,
                        &quot;title&quot;: &quot;Molestiae nostrum aut maxime.&quot;,
                        &quot;content&quot;: &quot;Consequatur sapiente illo eaque repudiandae fugiat placeat. Et et tempora delectus et sed. Esse minima et velit.&quot;,
                        &quot;correction&quot;: &quot;Sint facilis excepturi facilis et rerum consequatur non quae. Earum quia voluptate deserunt fugiat. Aliquid suscipit iure dolorem ut aut ut.&quot;,
                        &quot;materia_id&quot;: 34,
                        &quot;created_by&quot;: &quot;01kcfr6bgb2y7at2hb46dpwff5&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr6baqpz9xvs68beam07ms&quot;,
                        &quot;type&quot;: &quot;VerdadeiroFalso&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:57:34.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:57:34.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 4,
                            &quot;question_id&quot;: 41,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 4,
                            &quot;created_by&quot;: &quot;01kcfr6966cj5dxva9r4nr2yjq&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr6966cj5dxva9r4nr2yjq&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:58:00.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:58:00.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 42,
                        &quot;title&quot;: &quot;Aut dolorum velit officiis iusto sed debitis.&quot;,
                        &quot;content&quot;: &quot;Ut perferendis iure aperiam voluptatem molestias. Explicabo maiores ea repudiandae sint et commodi. Est explicabo et aperiam fuga cupiditate ex. Voluptatum earum et tempora earum.&quot;,
                        &quot;correction&quot;: &quot;Repellat voluptatem et velit dignissimos eligendi eum. Sapiente eveniet omnis ea veritatis. Assumenda rem sed harum natus magni est.&quot;,
                        &quot;materia_id&quot;: 34,
                        &quot;created_by&quot;: &quot;01kcfr6bvrn40z6w11g83zythj&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr6bp1w7cqew9ykznv58r9&quot;,
                        &quot;type&quot;: &quot;Aberta&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:57:34.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:57:34.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 4,
                            &quot;question_id&quot;: 42,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 5,
                            &quot;created_by&quot;: &quot;01kcfr6966cj5dxva9r4nr2yjq&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr6966cj5dxva9r4nr2yjq&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:58:00.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:58:00.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 43,
                        &quot;title&quot;: &quot;Inventore aut consectetur est est ratione enim.&quot;,
                        &quot;content&quot;: &quot;Tempore asperiores eos autem sed nisi deleniti corporis. In accusantium quis qui recusandae autem. Iste numquam et enim debitis facere.&quot;,
                        &quot;correction&quot;: &quot;Et impedit et est ab id sit rerum. Suscipit quae blanditiis in. Odio dignissimos qui neque qui. Dicta earum dolores qui temporibus repudiandae voluptatem eveniet. Qui eaque deleniti rerum rerum dicta soluta facere.&quot;,
                        &quot;materia_id&quot;: 34,
                        &quot;created_by&quot;: &quot;01kcfr6c71kvbzgcg3qafkmyem&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr6c1d4kb8r160y3c7kajs&quot;,
                        &quot;type&quot;: &quot;Aberta&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:57:34.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:57:34.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 4,
                            &quot;question_id&quot;: 43,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 6,
                            &quot;created_by&quot;: &quot;01kcfr6966cj5dxva9r4nr2yjq&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr6966cj5dxva9r4nr2yjq&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:58:00.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:58:00.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 45,
                        &quot;title&quot;: &quot;Earum autem dolore quisquam.&quot;,
                        &quot;content&quot;: &quot;Asperiores beatae autem voluptas ut sed illo asperiores. Non occaecati et minus commodi sit eaque ut. Architecto voluptatem quidem similique placeat.&quot;,
                        &quot;correction&quot;: &quot;Distinctio quod deserunt quam officiis et occaecati. Nesciunt tempore soluta magnam beatae assumenda. Totam molestiae unde exercitationem quo consequatur qui.&quot;,
                        &quot;materia_id&quot;: 34,
                        &quot;created_by&quot;: &quot;01kcfr6cxpyqch4ezfx6dcta30&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr6cqyk867ftz301a49gp4&quot;,
                        &quot;type&quot;: &quot;Aberta&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:57:34.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:57:34.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 4,
                            &quot;question_id&quot;: 45,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 8,
                            &quot;created_by&quot;: &quot;01kcfr6966cj5dxva9r4nr2yjq&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr6966cj5dxva9r4nr2yjq&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:58:00.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:58:00.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 46,
                        &quot;title&quot;: &quot;Ea impedit quisquam ut molestiae aut dolorem sit nostrum.&quot;,
                        &quot;content&quot;: &quot;Suscipit a quis aut sed qui. Vel dolorem odio eos provident quidem perferendis corporis. Eos omnis et ipsum est ad.&quot;,
                        &quot;correction&quot;: &quot;Non laborum deleniti quia repellat quia minima voluptatem. Error dolorem quibusdam itaque quisquam neque aspernatur consequatur. Voluptatem ut ut vitae aliquid natus quis ipsam.&quot;,
                        &quot;materia_id&quot;: 34,
                        &quot;created_by&quot;: &quot;01kcfr6d8y8476mparhxe6sf9m&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr6d3aeg84zaz52k30x3f3&quot;,
                        &quot;type&quot;: &quot;Aberta&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:57:34.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:57:34.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 4,
                            &quot;question_id&quot;: 46,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 9,
                            &quot;created_by&quot;: &quot;01kcfr6966cj5dxva9r4nr2yjq&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr6966cj5dxva9r4nr2yjq&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:58:00.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:58:00.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 49,
                        &quot;title&quot;: &quot;Facere magni neque ex provident libero magnam.&quot;,
                        &quot;content&quot;: &quot;Id dolor consequatur asperiores id at itaque. Doloremque occaecati omnis voluptate nam dolor voluptas. Facere culpa veniam est aut temporibus nulla. Beatae dicta asperiores est laboriosam.&quot;,
                        &quot;correction&quot;: &quot;Assumenda quisquam iusto explicabo dolorem quis quisquam. Doloribus neque est aut vel aut nesciunt beatae. Laboriosam omnis enim eveniet.&quot;,
                        &quot;materia_id&quot;: 34,
                        &quot;created_by&quot;: &quot;01kcfr6eaxmvdddbddq122p1j2&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr6e58kf93xnjwqnstd7zh&quot;,
                        &quot;type&quot;: &quot;Aberta&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:57:34.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:57:34.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 4,
                            &quot;question_id&quot;: 49,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 12,
                            &quot;created_by&quot;: &quot;01kcfr6966cj5dxva9r4nr2yjq&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr6966cj5dxva9r4nr2yjq&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:58:00.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:58:00.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 50,
                        &quot;title&quot;: &quot;Perspiciatis iste dolores officiis ipsa.&quot;,
                        &quot;content&quot;: &quot;Pariatur nihil quibusdam repudiandae et. Voluptatibus asperiores quos quae maxime et. Beatae reprehenderit cum quaerat est enim mollitia vero.&quot;,
                        &quot;correction&quot;: &quot;Minima esse facere exercitationem provident aperiam iste. Tenetur possimus esse sit et magni quidem aut. Adipisci ut id exercitationem. Expedita qui cupiditate fugiat.&quot;,
                        &quot;materia_id&quot;: 34,
                        &quot;created_by&quot;: &quot;01kcfr6ep6hv0dbebbb0msk0xk&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr6egj2c6qbp8kzf43ypy6&quot;,
                        &quot;type&quot;: &quot;VerdadeiroFalso&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:57:34.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:57:34.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 4,
                            &quot;question_id&quot;: 50,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 13,
                            &quot;created_by&quot;: &quot;01kcfr6966cj5dxva9r4nr2yjq&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr6966cj5dxva9r4nr2yjq&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:58:01.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:58:01.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 52,
                        &quot;title&quot;: &quot;Velit qui sit a nobis quia velit.&quot;,
                        &quot;content&quot;: &quot;Aut quae ut animi amet est aut. Earum dolores explicabo voluptates molestiae. Dolor consequatur impedit consequatur.&quot;,
                        &quot;correction&quot;: &quot;Deleniti temporibus doloremque sint incidunt. Veritatis et corporis ipsa minima mollitia. Et rerum et fuga praesentium magni ab.&quot;,
                        &quot;materia_id&quot;: 34,
                        &quot;created_by&quot;: &quot;01kcfr6fcqf3zh3g8w62g1g5a9&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr6f733a0rwt54x4s2wx1s&quot;,
                        &quot;type&quot;: &quot;VerdadeiroFalso&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:57:34.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:57:34.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 4,
                            &quot;question_id&quot;: 52,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 15,
                            &quot;created_by&quot;: &quot;01kcfr6966cj5dxva9r4nr2yjq&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr6966cj5dxva9r4nr2yjq&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:58:01.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:58:01.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 53,
                        &quot;title&quot;: &quot;Voluptatem quas occaecati eum quia.&quot;,
                        &quot;content&quot;: &quot;Labore esse velit aliquid quia at pariatur excepturi. Aut sunt nobis alias laborum. Nemo impedit reprehenderit sint iusto repellat quaerat. Quae qui ea ea ipsam deleniti.&quot;,
                        &quot;correction&quot;: &quot;Sit autem cumque debitis neque quo. Ex accusamus facere soluta qui quas architecto natus minima. Aut facilis et ut saepe.&quot;,
                        &quot;materia_id&quot;: 34,
                        &quot;created_by&quot;: &quot;01kcfr6fr15500pxbzvcwz9yny&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr6fjc3af4jwbygpqcezhb&quot;,
                        &quot;type&quot;: &quot;Multipla&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:57:34.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:57:34.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 4,
                            &quot;question_id&quot;: 53,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 16,
                            &quot;created_by&quot;: &quot;01kcfr6966cj5dxva9r4nr2yjq&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr6966cj5dxva9r4nr2yjq&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:58:01.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:58:01.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 54,
                        &quot;title&quot;: &quot;Est quia dolores qui accusantium quibusdam magnam et quia.&quot;,
                        &quot;content&quot;: &quot;Nulla dolorum voluptatibus architecto consectetur vel explicabo. Voluptatem et labore quam sint atque. Aspernatur consequatur incidunt culpa veritatis quam dignissimos alias. Iusto nihil esse qui ut enim numquam.&quot;,
                        &quot;correction&quot;: &quot;Sint autem autem incidunt temporibus libero sed. Eum deleniti est hic et sed nostrum consequatur. Voluptatem rerum deserunt praesentium. Est non quasi ea qui soluta quo. Incidunt aut non quia aut ut omnis molestiae.&quot;,
                        &quot;materia_id&quot;: 34,
                        &quot;created_by&quot;: &quot;01kcfr6g3dt9zet57wtdtxbck2&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr6fxrh48f06vcethwdyxz&quot;,
                        &quot;type&quot;: &quot;Multipla&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:57:34.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:57:34.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 4,
                            &quot;question_id&quot;: 54,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 17,
                            &quot;created_by&quot;: &quot;01kcfr6966cj5dxva9r4nr2yjq&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr6966cj5dxva9r4nr2yjq&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:58:01.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:58:01.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 55,
                        &quot;title&quot;: &quot;Perferendis perferendis deserunt sit ut.&quot;,
                        &quot;content&quot;: &quot;Deserunt explicabo expedita ad. Suscipit eum alias repellat qui quia sit. Qui voluptas quas ab. Cupiditate quisquam et vel repellat omnis ad. Non commodi qui sit et quod qui.&quot;,
                        &quot;correction&quot;: &quot;Eaque ut molestiae sed reprehenderit. Deserunt incidunt optio amet.&quot;,
                        &quot;materia_id&quot;: 34,
                        &quot;created_by&quot;: &quot;01kcfr6gepp2qvgb5phnyr3bc3&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr6g92c6tgj7t6svzq10nm&quot;,
                        &quot;type&quot;: &quot;Multipla&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:57:34.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:57:34.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 4,
                            &quot;question_id&quot;: 55,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 18,
                            &quot;created_by&quot;: &quot;01kcfr6966cj5dxva9r4nr2yjq&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr6966cj5dxva9r4nr2yjq&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:58:01.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:58:01.000000Z&quot;
                        }
                    }
                ]
            },
            {
                &quot;id&quot;: 5,
                &quot;title&quot;: &quot;Prova - omnis&quot;,
                &quot;description&quot;: &quot;Eveniet doloremque ipsa qui sint aut. Amet et consequatur sit consequatur. Et quas quisquam fugiat molestias non.&quot;,
                &quot;subject_id&quot;: 35,
                &quot;type&quot;: &quot;Exam&quot;,
                &quot;due_date&quot;: &quot;2025-12-20T06:40:00.000000Z&quot;,
                &quot;created_by&quot;: {
                    &quot;id&quot;: &quot;01kcfr69qbg32ktkq6ncm9hct2&quot;,
                    &quot;name&quot;: &quot;Jeanne Heaney MD&quot;,
                    &quot;email&quot;: &quot;sandy.kovacek@example.net&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;active&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:57:27.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:57:27.000000Z&quot;
                },
                &quot;updated_by&quot;: {
                    &quot;id&quot;: &quot;01kcfr69qbg32ktkq6ncm9hct2&quot;,
                    &quot;name&quot;: &quot;Jeanne Heaney MD&quot;,
                    &quot;email&quot;: &quot;sandy.kovacek@example.net&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;active&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:57:27.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:57:27.000000Z&quot;
                },
                &quot;status&quot;: &quot;Active&quot;,
                &quot;created_at&quot;: &quot;2025-12-15T00:57:27.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-12-15T00:57:27.000000Z&quot;,
                &quot;questions&quot;: [
                    {
                        &quot;id&quot;: 57,
                        &quot;title&quot;: &quot;Rerum aliquam consequuntur minus magnam veniam.&quot;,
                        &quot;content&quot;: &quot;Maiores odit culpa beatae quo mollitia harum. Non cupiditate voluptatem perspiciatis eius. Omnis harum sint eum modi repudiandae aut ipsam.&quot;,
                        &quot;correction&quot;: &quot;Cum fugit et cupiditate laboriosam cumque. Et quia rerum et ut laudantium molestiae consequatur. Dolores impedit ab fugiat doloribus molestiae error.&quot;,
                        &quot;materia_id&quot;: 35,
                        &quot;created_by&quot;: &quot;01kcfr7b4rhb34cfcb4bpm039w&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr7az3ytm5zswsae14ew3c&quot;,
                        &quot;type&quot;: &quot;Multipla&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:58:07.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:58:07.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 5,
                            &quot;question_id&quot;: 57,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 2,
                            &quot;created_by&quot;: &quot;01kcfr69qbg32ktkq6ncm9hct2&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr69qbg32ktkq6ncm9hct2&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:58:34.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:58:34.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 59,
                        &quot;title&quot;: &quot;Repellat iusto quaerat necessitatibus illum alias quaerat ut.&quot;,
                        &quot;content&quot;: &quot;Sint eos porro iure aperiam ea quas ducimus. Voluptatem quia perspiciatis aut commodi eius. Enim repellat blanditiis consequuntur quos eius.&quot;,
                        &quot;correction&quot;: &quot;Sit voluptatem at voluptatem id. Exercitationem aut quibusdam eum. Rerum dolores rerum unde temporibus rerum facilis. Voluptas autem sit fugit molestiae.&quot;,
                        &quot;materia_id&quot;: 35,
                        &quot;created_by&quot;: &quot;01kcfr7bvrwz2f4q70xd4sckvz&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr7bp0d29613ep0vmgmjb9&quot;,
                        &quot;type&quot;: &quot;Aberta&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:58:07.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:58:07.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 5,
                            &quot;question_id&quot;: 59,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 4,
                            &quot;created_by&quot;: &quot;01kcfr69qbg32ktkq6ncm9hct2&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr69qbg32ktkq6ncm9hct2&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:58:34.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:58:34.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 60,
                        &quot;title&quot;: &quot;Sit officiis recusandae fugiat.&quot;,
                        &quot;content&quot;: &quot;Aut est distinctio quod odio. Facilis non ut minus atque. Repudiandae at consectetur dicta placeat.&quot;,
                        &quot;correction&quot;: &quot;Aut in ipsa nisi sapiente. Corporis quis tempore aut similique. Inventore quia velit magnam hic officia qui.&quot;,
                        &quot;materia_id&quot;: 35,
                        &quot;created_by&quot;: &quot;01kcfr7c75m9har5qtns7ksbf9&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr7c1dypc5s6d9y3vrnvaw&quot;,
                        &quot;type&quot;: &quot;Aberta&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:58:07.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:58:07.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 5,
                            &quot;question_id&quot;: 60,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 5,
                            &quot;created_by&quot;: &quot;01kcfr69qbg32ktkq6ncm9hct2&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr69qbg32ktkq6ncm9hct2&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:58:34.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:58:34.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 61,
                        &quot;title&quot;: &quot;Et cupiditate distinctio corporis quia ut iure vel.&quot;,
                        &quot;content&quot;: &quot;Ab voluptas et quos sit labore sed. Qui nesciunt libero rem esse vel dolor. Minima voluptatem est accusamus voluptatem nihil voluptatem.&quot;,
                        &quot;correction&quot;: &quot;Voluptatem consequatur nihil error. Molestiae quae id officiis et. Sapiente eos itaque quos est sit voluptas. Esse qui molestiae quae molestiae.&quot;,
                        &quot;materia_id&quot;: 35,
                        &quot;created_by&quot;: &quot;01kcfr7cjpb0k1nx6nk6jzecy9&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr7ccwaptnnvzy5xqs3tb9&quot;,
                        &quot;type&quot;: &quot;Multipla&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:58:07.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:58:07.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 5,
                            &quot;question_id&quot;: 61,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 6,
                            &quot;created_by&quot;: &quot;01kcfr69qbg32ktkq6ncm9hct2&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr69qbg32ktkq6ncm9hct2&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:58:34.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:58:34.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 63,
                        &quot;title&quot;: &quot;Tenetur dolor consequatur blanditiis.&quot;,
                        &quot;content&quot;: &quot;Est error possimus velit et. Voluptatum minus deleniti qui repudiandae culpa eum quae. Tempore commodi enim magnam aspernatur natus debitis.&quot;,
                        &quot;correction&quot;: &quot;Earum blanditiis magni dicta ex accusantium velit voluptas. Deserunt consequuntur assumenda et aperiam nostrum ut. Illo accusantium aut aut deserunt aperiam. Quidem tempore corporis et.&quot;,
                        &quot;materia_id&quot;: 35,
                        &quot;created_by&quot;: &quot;01kcfr7d9nbhr6jyqkkn9agzar&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr7d3zdqhykxd3qfqp11vt&quot;,
                        &quot;type&quot;: &quot;Aberta&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:58:07.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:58:07.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 5,
                            &quot;question_id&quot;: 63,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 8,
                            &quot;created_by&quot;: &quot;01kcfr69qbg32ktkq6ncm9hct2&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr69qbg32ktkq6ncm9hct2&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:58:34.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:58:34.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 66,
                        &quot;title&quot;: &quot;Dolorum optio ut occaecati aut suscipit nulla accusamus.&quot;,
                        &quot;content&quot;: &quot;Id harum et quis id. Accusantium rerum saepe error molestiae est laudantium tenetur. Aperiam doloribus consequatur inventore.&quot;,
                        &quot;correction&quot;: &quot;Quas molestiae rerum recusandae ea ut inventore. Quia vel perspiciatis reiciendis impedit. Ipsa sunt incidunt dolorem earum maiores velit.&quot;,
                        &quot;materia_id&quot;: 35,
                        &quot;created_by&quot;: &quot;01kcfr7ecfze880263pn89jzf4&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr7e6rddqrrjd5tb09zqsn&quot;,
                        &quot;type&quot;: &quot;Aberta&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:58:07.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:58:07.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 5,
                            &quot;question_id&quot;: 66,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 11,
                            &quot;created_by&quot;: &quot;01kcfr69qbg32ktkq6ncm9hct2&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr69qbg32ktkq6ncm9hct2&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:58:34.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:58:34.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 70,
                        &quot;title&quot;: &quot;Nesciunt modi excepturi ducimus.&quot;,
                        &quot;content&quot;: &quot;Quo et commodi autem occaecati ipsa qui. Placeat explicabo fugit qui provident.&quot;,
                        &quot;correction&quot;: &quot;Ut officiis laboriosam nemo in maiores. Et repudiandae numquam dolorem blanditiis debitis. Ea error quo quia possimus accusantium.&quot;,
                        &quot;materia_id&quot;: 35,
                        &quot;created_by&quot;: &quot;01kcfr7fsycbh81vckc2qetnby&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr7fma7sfbvvv81xrmyv4g&quot;,
                        &quot;type&quot;: &quot;Multipla&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:58:07.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:58:07.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 5,
                            &quot;question_id&quot;: 70,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 15,
                            &quot;created_by&quot;: &quot;01kcfr69qbg32ktkq6ncm9hct2&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr69qbg32ktkq6ncm9hct2&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:58:34.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:58:34.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 71,
                        &quot;title&quot;: &quot;Quia aut dolores perspiciatis consectetur.&quot;,
                        &quot;content&quot;: &quot;Voluptatem neque voluptas provident cupiditate aut eius. Maiores nihil sapiente qui. Et iste ex delectus quod commodi dolorem. Non nihil necessitatibus voluptas impedit.&quot;,
                        &quot;correction&quot;: &quot;Nihil id voluptatem nihil. Esse nesciunt accusantium ut quaerat similique minima qui. Expedita sunt numquam voluptas et quae at nostrum. Est nisi blanditiis dolores repellendus velit ut molestias.&quot;,
                        &quot;materia_id&quot;: 35,
                        &quot;created_by&quot;: &quot;01kcfr7g5bw53yj3k2rw7j68w5&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr7fzk5bbrw3t8sjzs9m32&quot;,
                        &quot;type&quot;: &quot;Multipla&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:58:07.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:58:07.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 5,
                            &quot;question_id&quot;: 71,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 16,
                            &quot;created_by&quot;: &quot;01kcfr69qbg32ktkq6ncm9hct2&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr69qbg32ktkq6ncm9hct2&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:58:34.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:58:34.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 72,
                        &quot;title&quot;: &quot;In velit iste tempore similique aliquam.&quot;,
                        &quot;content&quot;: &quot;Repellat sequi et enim tempore voluptatum odio. Qui qui aut asperiores consequatur nulla vitae excepturi. Quas voluptate iusto nesciunt voluptatum iusto qui. Quia occaecati fuga exercitationem reprehenderit deserunt vel.&quot;,
                        &quot;correction&quot;: &quot;Reprehenderit sed repudiandae qui aliquid ut eum earum qui. Repellendus ex dicta ad nisi dicta.&quot;,
                        &quot;materia_id&quot;: 35,
                        &quot;created_by&quot;: &quot;01kcfr7ggsqnfz7prm7b2sckwh&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr7gb1dhwvczcbynd421vh&quot;,
                        &quot;type&quot;: &quot;VerdadeiroFalso&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:58:07.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:58:07.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 5,
                            &quot;question_id&quot;: 72,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 17,
                            &quot;created_by&quot;: &quot;01kcfr69qbg32ktkq6ncm9hct2&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr69qbg32ktkq6ncm9hct2&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:58:34.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:58:34.000000Z&quot;
                        }
                    }
                ]
            },
            {
                &quot;id&quot;: 6,
                &quot;title&quot;: &quot;Atividade - dolorem&quot;,
                &quot;description&quot;: &quot;Dicta tempore voluptates totam minus aut dignissimos. Distinctio sit est quae facilis. Cum velit nesciunt et libero commodi ea incidunt.&quot;,
                &quot;subject_id&quot;: 36,
                &quot;type&quot;: &quot;Activity&quot;,
                &quot;due_date&quot;: &quot;2026-01-12T20:16:08.000000Z&quot;,
                &quot;created_by&quot;: {
                    &quot;id&quot;: &quot;01kcfr8axn1nk5tba9yzzeq3g5&quot;,
                    &quot;name&quot;: &quot;Leopold Kilback&quot;,
                    &quot;email&quot;: &quot;mcdermott.chet@example.net&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;banned&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:58:34.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:58:34.000000Z&quot;
                },
                &quot;updated_by&quot;: {
                    &quot;id&quot;: &quot;01kcfr8axn1nk5tba9yzzeq3g5&quot;,
                    &quot;name&quot;: &quot;Leopold Kilback&quot;,
                    &quot;email&quot;: &quot;mcdermott.chet@example.net&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;banned&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:58:34.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:58:34.000000Z&quot;
                },
                &quot;status&quot;: &quot;Active&quot;,
                &quot;created_at&quot;: &quot;2025-12-15T00:58:36.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-12-15T00:58:36.000000Z&quot;,
                &quot;questions&quot;: [
                    {
                        &quot;id&quot;: 74,
                        &quot;title&quot;: &quot;Molestiae enim molestiae et repellendus.&quot;,
                        &quot;content&quot;: &quot;Aut ut et dolor. Quisquam est ex corporis non.&quot;,
                        &quot;correction&quot;: &quot;Incidunt aperiam veniam doloribus quia quia reprehenderit. Facilis voluptatem non tenetur tempora. Placeat et quaerat voluptatem harum occaecati delectus. Quidem magnam et labore vitae.&quot;,
                        &quot;materia_id&quot;: 36,
                        &quot;created_by&quot;: &quot;01kcfr8d7x746hrm5tkmdb0hsf&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr8d28kd0zvdjy6hz1xe5m&quot;,
                        &quot;type&quot;: &quot;Aberta&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:58:37.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:58:37.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 6,
                            &quot;question_id&quot;: 74,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 1,
                            &quot;created_by&quot;: &quot;01kcfr8axn1nk5tba9yzzeq3g5&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr8axn1nk5tba9yzzeq3g5&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:58:43.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:58:43.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 76,
                        &quot;title&quot;: &quot;Officiis doloremque perspiciatis quidem.&quot;,
                        &quot;content&quot;: &quot;Nesciunt qui minus qui minima in officia enim. Omnis consequuntur ut ab. Suscipit sunt repudiandae beatae adipisci. Vel officia numquam culpa officia enim sit ad.&quot;,
                        &quot;correction&quot;: &quot;Laboriosam quisquam eius eos. Fugiat unde incidunt consequuntur voluptates. Accusamus quod itaque nostrum recusandae pariatur. Et voluptate laboriosam ullam tempora qui.&quot;,
                        &quot;materia_id&quot;: 36,
                        &quot;created_by&quot;: &quot;01kcfr8dyeg7chpgzwph2dvt4n&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr8drtc6s1h1znxb39px14&quot;,
                        &quot;type&quot;: &quot;Aberta&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:58:37.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:58:37.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 6,
                            &quot;question_id&quot;: 76,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 3,
                            &quot;created_by&quot;: &quot;01kcfr8axn1nk5tba9yzzeq3g5&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr8axn1nk5tba9yzzeq3g5&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:58:43.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:58:43.000000Z&quot;
                        }
                    }
                ]
            },
            {
                &quot;id&quot;: 7,
                &quot;title&quot;: &quot;Atividade - repellat&quot;,
                &quot;description&quot;: &quot;Exercitationem provident nobis libero nesciunt aut impedit. Est quia et vel qui. Ullam doloremque iste sunt quo blanditiis.&quot;,
                &quot;subject_id&quot;: 37,
                &quot;type&quot;: &quot;Activity&quot;,
                &quot;due_date&quot;: &quot;2026-01-03T12:06:42.000000Z&quot;,
                &quot;created_by&quot;: {
                    &quot;id&quot;: &quot;01kcfr8beh35w1gyah3pspfh97&quot;,
                    &quot;name&quot;: &quot;Therese Fahey&quot;,
                    &quot;email&quot;: &quot;steuber.harry@example.org&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;active&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:58:34.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:58:34.000000Z&quot;
                },
                &quot;updated_by&quot;: {
                    &quot;id&quot;: &quot;01kcfr8beh35w1gyah3pspfh97&quot;,
                    &quot;name&quot;: &quot;Therese Fahey&quot;,
                    &quot;email&quot;: &quot;steuber.harry@example.org&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;active&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:58:34.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:58:34.000000Z&quot;
                },
                &quot;status&quot;: &quot;Inactive&quot;,
                &quot;created_at&quot;: &quot;2025-12-15T00:58:36.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-12-15T00:58:36.000000Z&quot;,
                &quot;questions&quot;: [
                    {
                        &quot;id&quot;: 78,
                        &quot;title&quot;: &quot;Quo aut quae aut dicta omnis.&quot;,
                        &quot;content&quot;: &quot;Ea labore ut doloremque et. Adipisci voluptatem et quo ut. Quo hic cum doloribus.&quot;,
                        &quot;correction&quot;: &quot;Molestiae accusantium sequi sit dolorem animi nulla eligendi. Ut rerum ad aperiam est sed in. Nulla sed sed nesciunt ut. Excepturi temporibus qui et veniam qui id.&quot;,
                        &quot;materia_id&quot;: 37,
                        &quot;created_by&quot;: &quot;01kcfr8mcwtpapgharg37syqvx&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr8m78q7egr138g3z481ww&quot;,
                        &quot;type&quot;: &quot;VerdadeiroFalso&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:58:45.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:58:45.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 7,
                            &quot;question_id&quot;: 78,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 1,
                            &quot;created_by&quot;: &quot;01kcfr8beh35w1gyah3pspfh97&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr8beh35w1gyah3pspfh97&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:58:50.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:58:50.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 79,
                        &quot;title&quot;: &quot;Qui consequatur natus minima.&quot;,
                        &quot;content&quot;: &quot;Doloribus eum incidunt ea. Aut autem ducimus aut. Dolor aspernatur repellendus est placeat voluptatum. Omnis non nobis exercitationem eos odit.&quot;,
                        &quot;correction&quot;: &quot;Doloribus eos vel aut id atque. Consequuntur quas rerum reprehenderit sit nulla sit. Quia ducimus aut adipisci ipsam molestias aliquam rerum tempore. Laudantium dolor repudiandae sed nihil dignissimos soluta. Corporis reiciendis ut velit ab.&quot;,
                        &quot;materia_id&quot;: 37,
                        &quot;created_by&quot;: &quot;01kcfr8mr4mqe9vkgahh2wa65b&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr8mjf0grqx2c0zevyd2ev&quot;,
                        &quot;type&quot;: &quot;Aberta&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:58:45.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:58:45.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 7,
                            &quot;question_id&quot;: 79,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 2,
                            &quot;created_by&quot;: &quot;01kcfr8beh35w1gyah3pspfh97&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr8beh35w1gyah3pspfh97&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:58:50.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:58:50.000000Z&quot;
                        }
                    }
                ]
            },
            {
                &quot;id&quot;: 8,
                &quot;title&quot;: &quot;Atividade - asperiores&quot;,
                &quot;description&quot;: &quot;Est aut similique aut beatae amet excepturi sed. Voluptatem numquam maiores aut nobis.&quot;,
                &quot;subject_id&quot;: 38,
                &quot;type&quot;: &quot;Activity&quot;,
                &quot;due_date&quot;: &quot;2025-12-29T10:47:34.000000Z&quot;,
                &quot;created_by&quot;: {
                    &quot;id&quot;: &quot;01kcfr8bzgt3ajzgdxg5jj32zc&quot;,
                    &quot;name&quot;: &quot;Samantha Fisher&quot;,
                    &quot;email&quot;: &quot;ochristiansen@example.org&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;active&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:58:35.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:58:35.000000Z&quot;
                },
                &quot;updated_by&quot;: {
                    &quot;id&quot;: &quot;01kcfr8bzgt3ajzgdxg5jj32zc&quot;,
                    &quot;name&quot;: &quot;Samantha Fisher&quot;,
                    &quot;email&quot;: &quot;ochristiansen@example.org&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;active&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:58:35.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:58:35.000000Z&quot;
                },
                &quot;status&quot;: &quot;Active&quot;,
                &quot;created_at&quot;: &quot;2025-12-15T00:58:36.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-12-15T00:58:36.000000Z&quot;,
                &quot;questions&quot;: [
                    {
                        &quot;id&quot;: 82,
                        &quot;title&quot;: &quot;Voluptatem aspernatur in reiciendis similique rerum labore magnam.&quot;,
                        &quot;content&quot;: &quot;Sit odit blanditiis ut quam est. Ipsam illum molestiae nulla omnis qui id. Cupiditate unde expedita blanditiis est autem nesciunt. Aut minima odio ex corporis quia.&quot;,
                        &quot;correction&quot;: &quot;Repellendus minus officia est facere neque vitae saepe. Qui explicabo cupiditate laborum quaerat. Ipsum est velit nostrum suscipit. Delectus consequatur qui sit explicabo ea repudiandae nesciunt.&quot;,
                        &quot;materia_id&quot;: 38,
                        &quot;created_by&quot;: &quot;01kcfr8vhn4axttxbp4n3ezcvk&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr8vc1gk0dzypt60rf5vp5&quot;,
                        &quot;type&quot;: &quot;Aberta&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:58:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:58:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 8,
                            &quot;question_id&quot;: 82,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 1,
                            &quot;created_by&quot;: &quot;01kcfr8bzgt3ajzgdxg5jj32zc&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr8bzgt3ajzgdxg5jj32zc&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:58:58.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:58:58.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 83,
                        &quot;title&quot;: &quot;Eius libero sit ut aut ut exercitationem tempora qui.&quot;,
                        &quot;content&quot;: &quot;Magnam veritatis repellat harum quia ratione accusamus quia. Ad doloremque adipisci aut iusto ea voluptas. Et consequatur laborum voluptas autem alias ipsam. Et nostrum aut quidem dolorem est architecto quia.&quot;,
                        &quot;correction&quot;: &quot;Sed voluptas laborum voluptatum eos quasi. Eligendi voluptate ratione reiciendis voluptatibus quae. Explicabo rerum ipsum fugit vitae animi. Officiis itaque ut ratione ex nihil. Optio voluptas necessitatibus voluptatem repellendus in.&quot;,
                        &quot;materia_id&quot;: 38,
                        &quot;created_by&quot;: &quot;01kcfr8vwzjgxmzk417626hhra&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr8vqadcw64arsrngff4bk&quot;,
                        &quot;type&quot;: &quot;Aberta&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:58:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:58:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 8,
                            &quot;question_id&quot;: 83,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 2,
                            &quot;created_by&quot;: &quot;01kcfr8bzgt3ajzgdxg5jj32zc&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr8bzgt3ajzgdxg5jj32zc&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:58:58.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:58:58.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 84,
                        &quot;title&quot;: &quot;Accusantium neque necessitatibus pariatur minima doloremque.&quot;,
                        &quot;content&quot;: &quot;Aperiam accusamus aut et. Est non est minima ducimus. Corporis repudiandae vero nemo ut ut laudantium quisquam.&quot;,
                        &quot;correction&quot;: &quot;Dicta excepturi ex omnis autem dolorem voluptatum iste qui. Eum ea mollitia laboriosam dolores repudiandae ad impedit et. Rem perspiciatis neque voluptas non. Qui consequatur eos aut ipsum et autem sint.&quot;,
                        &quot;materia_id&quot;: 38,
                        &quot;created_by&quot;: &quot;01kcfr8w88vrm2a6stdzrpmmnr&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr8w2jfjw7vkrpj59b0mzs&quot;,
                        &quot;type&quot;: &quot;VerdadeiroFalso&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:58:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:58:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 8,
                            &quot;question_id&quot;: 84,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 3,
                            &quot;created_by&quot;: &quot;01kcfr8bzgt3ajzgdxg5jj32zc&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr8bzgt3ajzgdxg5jj32zc&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:58:58.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:58:58.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 85,
                        &quot;title&quot;: &quot;Ut explicabo rem quod nihil qui.&quot;,
                        &quot;content&quot;: &quot;Doloribus et necessitatibus ex maiores. Quasi assumenda et et animi inventore dolore qui. Adipisci numquam recusandae excepturi nesciunt sapiente non et ut. Rerum perspiciatis necessitatibus repellat tempore optio sed.&quot;,
                        &quot;correction&quot;: &quot;Quibusdam numquam rerum tenetur sint exercitationem et facilis. Debitis doloribus cumque officiis est nisi sit nisi. Quisquam sit fuga est quis autem mollitia sit. Ut nihil facere iusto et magnam aspernatur. Voluptatem voluptate perspiciatis natus omnis fugiat est.&quot;,
                        &quot;materia_id&quot;: 38,
                        &quot;created_by&quot;: &quot;01kcfr8wkk74nqbw2yq7fseqf0&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr8wdxk9ebw28m1ec1htq0&quot;,
                        &quot;type&quot;: &quot;VerdadeiroFalso&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:58:52.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:58:52.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 8,
                            &quot;question_id&quot;: 85,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 4,
                            &quot;created_by&quot;: &quot;01kcfr8bzgt3ajzgdxg5jj32zc&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr8bzgt3ajzgdxg5jj32zc&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:58:58.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:58:58.000000Z&quot;
                        }
                    }
                ]
            },
            {
                &quot;id&quot;: 9,
                &quot;title&quot;: &quot;Atividade - dolor&quot;,
                &quot;description&quot;: &quot;Et ab sit aut repellat dicta eum. Aut eum maxime dignissimos adipisci. In voluptatem non et velit.&quot;,
                &quot;subject_id&quot;: 39,
                &quot;type&quot;: &quot;Activity&quot;,
                &quot;due_date&quot;: &quot;2025-12-22T07:59:45.000000Z&quot;,
                &quot;created_by&quot;: {
                    &quot;id&quot;: &quot;01kcfr8cghxd5xjmyxhz5apddk&quot;,
                    &quot;name&quot;: &quot;Khalil Schmeler&quot;,
                    &quot;email&quot;: &quot;otorphy@example.org&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;banned&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:58:35.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:58:35.000000Z&quot;
                },
                &quot;updated_by&quot;: {
                    &quot;id&quot;: &quot;01kcfr8cghxd5xjmyxhz5apddk&quot;,
                    &quot;name&quot;: &quot;Khalil Schmeler&quot;,
                    &quot;email&quot;: &quot;otorphy@example.org&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;banned&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:58:35.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:58:35.000000Z&quot;
                },
                &quot;status&quot;: &quot;Inactive&quot;,
                &quot;created_at&quot;: &quot;2025-12-15T00:58:36.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-12-15T00:58:36.000000Z&quot;,
                &quot;questions&quot;: [
                    {
                        &quot;id&quot;: 89,
                        &quot;title&quot;: &quot;Officia soluta corrupti optio quidem.&quot;,
                        &quot;content&quot;: &quot;Labore dolores fugit et aut odio. Accusantium tempore non velit doloribus eaque rerum. Excepturi inventore eius qui modi.&quot;,
                        &quot;correction&quot;: &quot;Itaque omnis maxime quia illo. Iure voluptatem recusandae saepe laudantium consequatur. Qui vitae illo minima quia. Consectetur laudantium saepe ex omnis labore ratione.&quot;,
                        &quot;materia_id&quot;: 39,
                        &quot;created_by&quot;: &quot;01kcfr93rntny7vx2tqdy3cjg5&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr93k37t9w0p8r98pxdkft&quot;,
                        &quot;type&quot;: &quot;Aberta&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:58:59.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:58:59.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 9,
                            &quot;question_id&quot;: 89,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 4,
                            &quot;created_by&quot;: &quot;01kcfr8cghxd5xjmyxhz5apddk&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr8cghxd5xjmyxhz5apddk&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:59:05.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:59:05.000000Z&quot;
                        }
                    }
                ]
            },
            {
                &quot;id&quot;: 10,
                &quot;title&quot;: &quot;Exerc&iacute;cio - eum&quot;,
                &quot;description&quot;: &quot;Illo vitae enim rem consectetur earum ut. Sapiente modi dolores qui pariatur. Corrupti laboriosam sequi a qui nihil nemo.&quot;,
                &quot;subject_id&quot;: 40,
                &quot;type&quot;: &quot;Exercise&quot;,
                &quot;due_date&quot;: &quot;2025-12-21T00:33:16.000000Z&quot;,
                &quot;created_by&quot;: {
                    &quot;id&quot;: &quot;01kcfr99nkgjyywpqan8xjvnjm&quot;,
                    &quot;name&quot;: &quot;Joesph Ullrich&quot;,
                    &quot;email&quot;: &quot;jvandervort@example.com&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;banned&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:59:05.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:59:05.000000Z&quot;
                },
                &quot;updated_by&quot;: {
                    &quot;id&quot;: &quot;01kcfr99nkgjyywpqan8xjvnjm&quot;,
                    &quot;name&quot;: &quot;Joesph Ullrich&quot;,
                    &quot;email&quot;: &quot;jvandervort@example.com&quot;,
                    &quot;created_by&quot;: null,
                    &quot;updated_by&quot;: null,
                    &quot;status&quot;: &quot;banned&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;created_at&quot;: &quot;2025-12-15T00:59:05.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-12-15T00:59:05.000000Z&quot;
                },
                &quot;status&quot;: &quot;Inactive&quot;,
                &quot;created_at&quot;: &quot;2025-12-15T00:59:07.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-12-15T00:59:07.000000Z&quot;,
                &quot;questions&quot;: [
                    {
                        &quot;id&quot;: 90,
                        &quot;title&quot;: &quot;Corrupti repellat quae sed tempora.&quot;,
                        &quot;content&quot;: &quot;Fuga rerum voluptatem consequatur atque odit. Beatae non eum culpa veniam. Est consectetur iusto harum soluta sequi explicabo. Dolorum quia totam culpa dolorem.&quot;,
                        &quot;correction&quot;: &quot;Aliquam dolor nulla amet voluptatem modi. Est sapiente odit tempore impedit aperiam. Id in pariatur rerum amet quo.&quot;,
                        &quot;materia_id&quot;: 40,
                        &quot;created_by&quot;: &quot;01kcfr9bf0hg96f68d4dv901sd&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr9b9b916f945dsewm8qhd&quot;,
                        &quot;type&quot;: &quot;Aberta&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:59:10.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:59:10.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 10,
                            &quot;question_id&quot;: 90,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 1,
                            &quot;created_by&quot;: &quot;01kcfr99nkgjyywpqan8xjvnjm&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr99nkgjyywpqan8xjvnjm&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:59:25.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:59:25.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 94,
                        &quot;title&quot;: &quot;Quam ex ipsam earum pariatur dolorem dolorem inventore adipisci.&quot;,
                        &quot;content&quot;: &quot;Ipsum laborum deserunt hic. Accusamus optio aperiam ex aut deserunt porro. Iure aut libero et odio.&quot;,
                        &quot;correction&quot;: &quot;Cupiditate exercitationem provident consectetur rerum minus hic iure. Sit aut dolores voluptatibus quis sit error.&quot;,
                        &quot;materia_id&quot;: 40,
                        &quot;created_by&quot;: &quot;01kcfr9cvwgpfh54pds0gyrzw5&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr9cp9eqcbnfdd4kgct0r5&quot;,
                        &quot;type&quot;: &quot;Aberta&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:59:10.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:59:10.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 10,
                            &quot;question_id&quot;: 94,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 5,
                            &quot;created_by&quot;: &quot;01kcfr99nkgjyywpqan8xjvnjm&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr99nkgjyywpqan8xjvnjm&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:59:25.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:59:25.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 96,
                        &quot;title&quot;: &quot;Porro fuga eligendi ipsam vitae.&quot;,
                        &quot;content&quot;: &quot;Adipisci sunt dolorem perferendis. Suscipit veniam ut exercitationem in fugit. Dolores accusamus fuga qui quia sit. In quisquam est delectus consequatur voluptatum.&quot;,
                        &quot;correction&quot;: &quot;Quos ut accusantium molestiae molestiae asperiores. Consectetur eum molestiae quis dolorem rerum itaque. Consequuntur neque pariatur voluptatem.&quot;,
                        &quot;materia_id&quot;: 40,
                        &quot;created_by&quot;: &quot;01kcfr9dj8m5jy16t3gmmnd3fm&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr9dcpm62y9dh9vsgnyvbr&quot;,
                        &quot;type&quot;: &quot;VerdadeiroFalso&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:59:10.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:59:10.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 10,
                            &quot;question_id&quot;: 96,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 7,
                            &quot;created_by&quot;: &quot;01kcfr99nkgjyywpqan8xjvnjm&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr99nkgjyywpqan8xjvnjm&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:59:25.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:59:25.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 98,
                        &quot;title&quot;: &quot;Eum cupiditate molestiae et ab quisquam ea.&quot;,
                        &quot;content&quot;: &quot;Quo nihil perferendis ullam. Nemo assumenda et beatae voluptatem. Et excepturi molestias qui nihil dolor. In aut repellat atque tenetur consectetur id. Dignissimos harum repellat molestiae perferendis dolorem aut nihil.&quot;,
                        &quot;correction&quot;: &quot;Aliquam hic et nostrum et quaerat ducimus. Laboriosam optio voluptatem dolorem atque distinctio. Est voluptas rerum explicabo quo dolores commodi. Labore id numquam vitae est itaque in est minus.&quot;,
                        &quot;materia_id&quot;: 40,
                        &quot;created_by&quot;: &quot;01kcfr9e8nnn1agy7gcv0dykre&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr9e32q5td4wgftpf4tbqk&quot;,
                        &quot;type&quot;: &quot;VerdadeiroFalso&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:59:10.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:59:10.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 10,
                            &quot;question_id&quot;: 98,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 9,
                            &quot;created_by&quot;: &quot;01kcfr99nkgjyywpqan8xjvnjm&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr99nkgjyywpqan8xjvnjm&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:59:25.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:59:25.000000Z&quot;
                        }
                    },
                    {
                        &quot;id&quot;: 99,
                        &quot;title&quot;: &quot;Omnis culpa modi qui.&quot;,
                        &quot;content&quot;: &quot;Sunt libero voluptatum minus dignissimos saepe dolor. Tempora aut impedit deserunt voluptatem ullam harum ut.&quot;,
                        &quot;correction&quot;: &quot;Voluptas numquam soluta et. Placeat quia nobis quos dolor id. Et sed corporis ipsam ut tempore voluptatem quaerat. Laudantium debitis molestiae provident pariatur possimus accusamus. Ex quos tempore qui cumque.&quot;,
                        &quot;materia_id&quot;: 40,
                        &quot;created_by&quot;: &quot;01kcfr9em1csxtwjpgw77cd8we&quot;,
                        &quot;updated_by&quot;: &quot;01kcfr9eebdfsvh6r2xy1rcbxn&quot;,
                        &quot;type&quot;: &quot;Multipla&quot;,
                        &quot;status&quot;: &quot;Active&quot;,
                        &quot;created_at&quot;: &quot;2025-12-15T00:59:10.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-12-15T00:59:10.000000Z&quot;,
                        &quot;pivot&quot;: {
                            &quot;collection_id&quot;: 10,
                            &quot;question_id&quot;: 99,
                            &quot;status&quot;: &quot;Active&quot;,
                            &quot;order&quot;: 10,
                            &quot;created_by&quot;: &quot;01kcfr99nkgjyywpqan8xjvnjm&quot;,
                            &quot;updated_by&quot;: &quot;01kcfr99nkgjyywpqan8xjvnjm&quot;,
                            &quot;created_at&quot;: &quot;2025-12-15T00:59:25.000000Z&quot;,
                            &quot;updated_at&quot;: &quot;2025-12-15T00:59:25.000000Z&quot;
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
        &quot;total&quot;: 12
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
    \"status\": \"Inativo\"
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
    "status": "Inativo"
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
               value="Inativo"
               data-component="body">
    <br>
<p>Example: <code>Inativo</code></p>
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
    \"body\": \"architecto\",
    \"content_type\": \"n\",
    \"content_type_description\": \"architecto\",
    \"content_tags\": [
        {
            \"tag_name\": \"g\",
            \"description\": \"Quos velit et fugiat sunt nihil accusantium harum.\"
        }
    ],
    \"status\": \"Ativo\",
    \"published_at\": \"2025-12-15T03:14:59\",
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
    "body": "architecto",
    "content_type": "n",
    "content_type_description": "architecto",
    "content_tags": [
        {
            "tag_name": "g",
            "description": "Quos velit et fugiat sunt nihil accusantium harum."
        }
    ],
    "status": "Ativo",
    "published_at": "2025-12-15T03:14:59",
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
            <b style="line-height: 2;"><code>body</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="body"                data-endpoint="POSTapi-conteudos"
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
               value="Ativo"
               data-component="body">
    <br>
<p>Example: <code>Ativo</code></p>
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
               value="2025-12-15T03:14:59"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2025-12-15T03:14:59</code></p>
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
    "http://localhost:8000/api/conteudos/1" \
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
    \"published_at\": \"2025-12-15T03:14:59\",
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
    "http://localhost:8000/api/conteudos/1"
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
    "published_at": "2025-12-15T03:14:59",
    "is_moderator_only": true,
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
               value="1"
               data-component="url">
    <br>
<p>The ID of the conteudo. Example: <code>1</code></p>
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
               value="2025-12-15T03:14:59"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2025-12-15T03:14:59</code></p>
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
<p>Example: <code>true</code></p>
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
    "http://localhost:8000/api/conteudos/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/conteudos/1"
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
               value="1"
               data-component="url">
    <br>
<p>The ID of the conteudo. Example: <code>1</code></p>
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
    \"status\": \"Inativo\"
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
    "status": "Inativo"
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
               value="Inativo"
               data-component="body">
    <br>
<p>Example: <code>Inativo</code></p>
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
    \"is_moderator_only\": false,
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
    "is_moderator_only": false,
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
<p>Example: <code>false</code></p>
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
    \"type\": \"Multipla\",
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
    "type": "Multipla",
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
               value="Multipla"
               data-component="body">
    <br>
<p>Example: <code>Multipla</code></p>
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
    --get "http://localhost:8000/api/questoes/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/questoes/1"
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
               value="1"
               data-component="url">
    <br>
<p>The ID of the questo. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-questoes--id-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-questoes--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/questoes/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"b\",
    \"content\": \"architecto\",
    \"correction\": \"architecto\",
    \"materia\": 16,
    \"type\": \"VerdadeiroFalso\",
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
    "http://localhost:8000/api/questoes/1"
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
    "type": "VerdadeiroFalso",
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
               value="1"
               data-component="url">
    <br>
<p>The ID of the questo. Example: <code>1</code></p>
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
               value="VerdadeiroFalso"
               data-component="body">
    <br>
<p>Example: <code>VerdadeiroFalso</code></p>
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
    "http://localhost:8000/api/questoes/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/questoes/1"
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
               value="1"
               data-component="url">
    <br>
<p>The ID of the questo. Example: <code>1</code></p>
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
    \"type\": \"Activity\",
    \"due_date\": \"2052-01-08\",
    \"status\": \"Inactive\",
    \"questions\": [
        {
            \"title\": \"b\",
            \"content\": \"architecto\",
            \"correction\": \"architecto\",
            \"materia\": 16,
            \"type\": \"Aberta\",
            \"status\": \"Inactive\",
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
    "type": "Activity",
    "due_date": "2052-01-08",
    "status": "Inactive",
    "questions": [
        {
            "title": "b",
            "content": "architecto",
            "correction": "architecto",
            "materia": 16,
            "type": "Aberta",
            "status": "Inactive",
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
               value="Activity"
               data-component="body">
    <br>
<p>Example: <code>Activity</code></p>
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
               value="Aberta"
               data-component="body">
    <br>
<p>Example: <code>Aberta</code></p>
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
    "http://localhost:8000/api/questoescolecao/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"b\",
    \"description\": \"Et animi quos velit et fugiat.\",
    \"type\": \"Exam\",
    \"due_date\": \"2052-01-08\",
    \"status\": \"Active\",
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
    "http://localhost:8000/api/questoescolecao/1"
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
    "status": "Active",
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
               value="1"
               data-component="url">
    <br>
<p>The ID of the questoescolecao. Example: <code>1</code></p>
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
    "http://localhost:8000/api/questoescolecao/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/questoescolecao/1"
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
               value="1"
               data-component="url">
    <br>
<p>The ID of the questoescolecao. Example: <code>1</code></p>
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

                                <h2 id="usuarios-GETapi-me">Retorna as informações do usuário autenticado junto com suas habilidades.</h2>

<p>
</p>



<span id="example-requests-GETapi-me">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/me" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/me"
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

<span id="example-responses-GETapi-me">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;id&quot;: 4,
    &quot;name&quot;: &quot;Jessica Jones&quot;,
    &quot;email&quot;: &quot;jessica.jones@example.com&quot;,
    &quot;status&quot;: &quot;active&quot;,
    &quot;abilities&quot;: {
        &quot;users&quot;: {
            &quot;view&quot;: {
                &quot;self&quot;: true,
                &quot;any&quot;: false
            },
            &quot;create&quot;: false,
            &quot;update&quot;: {
                &quot;self&quot;: true,
                &quot;any&quot;: false
            },
            &quot;delete&quot;: {
                &quot;self&quot;: false,
                &quot;any&quot;: false
            }
        }
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;N&atilde;o autenticado. Token inv&aacute;lido ou ausente..&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-me" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-me"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-me"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-me" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-me">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-me" data-method="GET"
      data-path="api/me"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-me', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-me"
                    onclick="tryItOut('GETapi-me');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-me"
                    onclick="cancelTryOut('GETapi-me');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-me"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/me</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-me"
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
                              name="Accept"                data-endpoint="GETapi-me"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="usuarios-PUTapi-users--user_id--password">updatePassword: Atualiza a senha de um usuário do sistema.</h2>

<p>
</p>



<span id="example-requests-PUTapi-users--user_id--password">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/users/01kcfr2vb4qb8b4kjtfxb3pv7b/password" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"password\": \"|]|{+-\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/users/01kcfr2vb4qb8b4kjtfxb3pv7b/password"
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
               value="01kcfr2vb4qb8b4kjtfxb3pv7b"
               data-component="url">
    <br>
<p>The ID of the user. Example: <code>01kcfr2vb4qb8b4kjtfxb3pv7b</code></p>
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
    \"role\": \"student\"
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
    "role": "student"
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
<p>Must be a valid email address. Example: <code>zbailey@example.net</code></p>
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
               value="student"
               data-component="body">
    <br>
<p>Example: <code>student</code></p>
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
    --get "http://localhost:8000/api/users/01kcfr2vb4qb8b4kjtfxb3pv7b" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/users/01kcfr2vb4qb8b4kjtfxb3pv7b"
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
               value="01kcfr2vb4qb8b4kjtfxb3pv7b"
               data-component="url">
    <br>
<p>The ID of the user. Example: <code>01kcfr2vb4qb8b4kjtfxb3pv7b</code></p>
            </div>
                    </form>

                    <h2 id="usuarios-PUTapi-users--id-">update: Atualiza os dados de um usuário do sistema.</h2>

<p>
</p>



<span id="example-requests-PUTapi-users--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/users/01kcfr2vb4qb8b4kjtfxb3pv7b" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"nome\": \"b\",
    \"email\": \"zbailey@example.net\",
    \"tipo\": \"Aluno\",
    \"status\": \"Ativo\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/users/01kcfr2vb4qb8b4kjtfxb3pv7b"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nome": "b",
    "email": "zbailey@example.net",
    "tipo": "Aluno",
    "status": "Ativo"
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
               value="01kcfr2vb4qb8b4kjtfxb3pv7b"
               data-component="url">
    <br>
<p>The ID of the user. Example: <code>01kcfr2vb4qb8b4kjtfxb3pv7b</code></p>
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
<p>Must be a valid email address. Example: <code>zbailey@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>tipo</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="tipo"                data-endpoint="PUTapi-users--id-"
               value="Aluno"
               data-component="body">
    <br>
<p>Example: <code>Aluno</code></p>
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
               value="Ativo"
               data-component="body">
    <br>
<p>Example: <code>Ativo</code></p>
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
    "http://localhost:8000/api/users/01kcfr2vb4qb8b4kjtfxb3pv7b" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/users/01kcfr2vb4qb8b4kjtfxb3pv7b"
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
               value="01kcfr2vb4qb8b4kjtfxb3pv7b"
               data-component="url">
    <br>
<p>The ID of the user. Example: <code>01kcfr2vb4qb8b4kjtfxb3pv7b</code></p>
            </div>
                    </form>

                    <h2 id="usuarios-PATCHapi-users--user_id--status">changeStatus: Altera o status de um usuário do sistema.</h2>

<p>
</p>



<span id="example-requests-PATCHapi-users--user_id--status">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost:8000/api/users/01kcfr2vb4qb8b4kjtfxb3pv7b/status" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"status\": \"inactive\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/users/01kcfr2vb4qb8b4kjtfxb3pv7b/status"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "status": "inactive"
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
               value="01kcfr2vb4qb8b4kjtfxb3pv7b"
               data-component="url">
    <br>
<p>The ID of the user. Example: <code>01kcfr2vb4qb8b4kjtfxb3pv7b</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PATCHapi-users--user_id--status"
               value="inactive"
               data-component="body">
    <br>
<p>Example: <code>inactive</code></p>
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
