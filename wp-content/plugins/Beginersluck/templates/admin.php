<div class="wrap">

    <h1>Luckiest of them all.</h1>

    <?php settings_errors(); ?>

    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab1">Manage Settings</a></li>
        <li><a href="#tab2">Updates</a></li>
        <li><a href="#tab3">About</a></li>
    </ul>

    <div class="tab-content">

        <div id="tab1" class="tab-pane active">

            <form method="post" action="options.php">
		        <?php
		        settings_fields( 'Beginersluck_plugin_settings' );
		        do_settings_sections( 'beginers_luck_plugin' );
		        submit_button();
		        ?>
            </form>

        </div>

        <div id="tab2" class="tab-pane">
            <h3>Updates</h3>
        </div>

        <div id="tab3" class="tab-pane">
            <h3>Cory Hrycko</h3>
        </div>

    </div>

</div>