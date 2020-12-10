
<?php
/*
 * Template Name: お問い合わせ
 */ 
?>
<?php get_header(); ?>

<div class="top-schedule-wrapper">
<?php get_template_part('top-wrapper'); ?>
</div>

    <section class="inquiry-wrapper">
        <div class="inquiry-container">
        <div class="breadcrumb">
            <?php bcn_display(); ?>
        </div>
            <h2 class="page-title inquiry-title">INQUIRY</h2>
            <div class="inquiry-contents">
                <p class="inquiry-text">
                    小池博史ブリッジプロジェクトにご興味を持っていただきまして、ありがとうございます。<br>公演に関するお問い合わせ、公演・ワークショップのご依頼など、<br>お電話（03-3385-2066）か、下記フォームよりお気軽にお問い合わせください。
                </p>
                    <?php echo do_shortcode('[contact-form-7 id="163" title="お問い合わせフォーム"]'); ?>
            </div>
        </div> 
    </section>

<?php get_footer(); ?>