<sl-card class="card-overview">
    <img slot="image" src="<?=$img?>" alt="<?=$imgAlt?>" />

    <strong><?=$title?></strong><br />
    <?=$content?><br />
    <small><?=$smallDescription?></small>

    <div slot="footer">
        <sl-button variant="primary" pill><?=$btnText?></sl-button>
        <sl-rating></sl-rating>
        <p>$<span><?=$price?></span></p>
    </div>
</sl-card>