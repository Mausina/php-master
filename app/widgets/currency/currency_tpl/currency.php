<option value="" class="label"><?= $this->currency['code'] ?></option>
<?php foreach ($this->currencies as $k => $val): ?>
    <?php if ($k !== $this->currency['code']): ?>
        <option value="<?= $k; ?>"><?= $k; ?></option>
    <?php endif; ?>
<?php endforeach; ?>