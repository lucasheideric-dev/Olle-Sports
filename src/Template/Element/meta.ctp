<meta name="title" content="<?= $artigo->titulo ?>">
<meta name="description" content="<?= $artigo->subtitulo ?>">

<link href='https://ollesports.com.br/img/<?= $artigo->caminho_foto_conteudo ?>' rel='image_src'/>


<meta property="twitter:description" content="<?= $artigo->subtitulo ?>">
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:title" content="<?= $artigo->titulo ?>">
<meta property="twitter:image" content="<?= $artigo->imagem_url ?>">

<title><?= $artigo->titulo ?></title>

<meta name="title" content="<?= $artigo->titulo ?>">
<meta name="description" content="<?= $artigo->subtitulo ?>">

<meta itemprop="image" content="<?= $artigo->imagem_url ?>">
<link rel="canonical" href="https://ollesports.com.br/noticia/<?= $artigo->slug ?>">
<meta property="og:type" content="article">
<meta property="og:description" content="<?= $artigo->subtitulo ?>">
<meta property="og:title" content="<?= $artigo->titulo ?>">
<meta property="og:locale" content="pt_BR">
<meta property="og:site_name" content="Ollé Sports">
<meta property="og:image" content="<?= $artigo->imagem_url ?>">
<meta property="og:image:width" content="1200">
<meta property="og:url" content="https://ollesports.com.br/noticia/<?= $artigo->slug ?>">
<link rel="amphtml" href="https://ollesports.com.br/noticia/<?= $artigo->slug ?>">
<meta name="robots" content="max-image-preview:large">
<meta property="ia:markup_url" content="https://ollesports.com.br/noticia/<?= $artigo->slug ?>">