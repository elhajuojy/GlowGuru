<sl-card class="card-overview">
    <img slot="image" src="<?=htmlspecialchars($img)?>" alt="<?=htmlspecialchars($imgAlt)?>" />

    <strong><?=htmlspecialchars($title)?></strong><br />
    <?=$content?><br />
    <small><?=htmlspecialchars($smallDescription)?></small>

    <div slot="footer">
        <a href="/productDetail?id=<?=htmlspecialchars($id)?>">
            <button class="text-blue-600" variant="secondry" pill><?=htmlspecialchars($btnText)?></button>
        </a>
        <!-- <sl-rating></sl-rating> -->
        <p>$<span><?=htmlspecialchars($price)?></span></p>
    </div>
</sl-card>