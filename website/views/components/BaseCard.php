<sl-card class="card-overview">
    <img slot="image" src="<?=$img?>" alt="<?=$imgAlt?>" />

    <strong><?=$title?></strong><br />
    <?=$content?><br />
    <small><?=$smallDescription?></small>

    <div slot="footer">
        <a href="/productDetail?id=<?=$id?>">
            <button class="text-blue-600" variant="secondry" pill><?=$btnText?></button>
        </a>
        <!-- <sl-rating></sl-rating> -->
        <p>$<span><?=$price?></span></p>
    </div>
</sl-card>