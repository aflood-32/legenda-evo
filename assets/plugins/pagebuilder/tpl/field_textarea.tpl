<div class="field type-<?= $field['type'] ?>" data-field="<?= $name ?>">
    <?php if (!empty($field['caption'])): ?> 
        <div class="field-name"><?= $field['caption'] ?></div>
    <?php endif; ?> 

	<textarea name="contentblocks_<?= $name ?>"<?php if (isset($field['height'])) {?> style="height: <?= $field['height'] ?>"<?php } ?>><?= htmlentities($value) ?></textarea>

    <?php if (!empty($field['note'])): ?> 
        <div class="field-note"><?= $field['note'] ?></div>
    <?php endif; ?>
</div>