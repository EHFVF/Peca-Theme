<?php if($page->parents()->count() !== 0): ?>
<ul class="pager">
<?php if($next = $page->nextVisible()): ?>
<li class="previous" title="<?php echo htmlspecialchars($next->title(), ENT_QUOTES, 'UTF-8') ?>">
<a href="<?php echo $next->url() ?>"><span class="PECA glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
</li>
<?php endif ?>
<?php if($page->parent() != $page->isHomePage()): ?>
<li title="Go back to <?php echo htmlspecialchars($page->parent()->title(), ENT_QUOTES, 'UTF-8') ?>">
<a href="<?php echo $page->parent()->url() ?>"><span class="PECA glyphicon glyphicon-chevron-up" aria-hidden="true"></span></a>
</li>
<?php endif ?>
<?php if($prev = $page->prevVisible()): ?>
<li class="next" title="<?php echo htmlspecialchars($prev->title(), ENT_QUOTES, 'UTF-8') ?>">
<a href="<?php echo $prev->url() ?>"><span class="PECA glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
</li>
<?php endif ?>
</ul>
<?php endif ?>