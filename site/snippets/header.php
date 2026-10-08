<?= snippet('head') ?>

<body>

    <header id="header-site">

        <?php
			$items = $pages->listed();
			if($items->isNotEmpty()):
		?>

        <nav id="nav-site">
            <ul>
            <?php foreach($items as $item): ?>
                $title = "";
                $title = $item->title()->html()->lower();
                <li><a <?php e($item->isOpen(), 'class="active"') ?> href="<?= $item->url() ?>" title="<?= $title ?>"><?= $title?></a></li>
            <?php endforeach ?>
            </ul>
        </nav>

        <?php endif ?>

    </header>