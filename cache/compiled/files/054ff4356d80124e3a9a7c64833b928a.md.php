<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/xampp/htdocs/grav/user/pages/05.blog/02.blog-2/item.en.md',
    'modified' => 1743671673,
    'size' => 776,
    'data' => [
        'header' => [
            'title' => 'Blog-en-2'
        ],
        'frontmatter' => 'title: Blog-en-2',
        'markdown' => 'Grav typically uses folder names to generate a URL route for a particular page. This allows for a site architecture that is easy to understand and implement as a set of nested folders. However, with a multilingual site, you may want to use a URL that makes more sense in that particular language.

Let\'s say we have the following folder structure:

01.animals
01.mammals
01.bats
02.bears
03.foxes
04.cats
02.reptiles
03.birds
04.insets
05.aquatic This would generate URLs like http://yoursite.com/animals/mammals/bears. This is great for an English site, but if you wanted to have a French version, you would want them translated appropriately. The easiest way to achieve this is to add a custom slug to each fr.mdpage file. For example, dynamic page'
    ]
];
