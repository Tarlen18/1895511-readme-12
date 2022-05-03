<div class="post-link__wrapper">
    <a class="post-link__external" href="http://" title="Перейти по ссылке">
        <div class="post-link__info-wrapper">
            <div class="post-link__icon-wrapper">
                <img src="https://www.google.com/s2/favicons?domain=vitadental.ru" alt="Иконка">
            </div>
            <div class="post-link__info">
                <h3>
                    <?= $row['title']; ?>
                </h3>
            </div>
        </div>
        <span>
            <?= htmlspecialchars($row['reference']) ?>
        </span>
    </a>
</div>
