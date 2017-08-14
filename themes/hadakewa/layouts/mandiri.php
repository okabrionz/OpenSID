<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php $this->load->view($folder_themes.'/layouts/header.php');?>
			<div id="contentwrapper">
				<div id="contentcolumn">
					<div class="innertube">
						<?php
							$views_partial_layout = '';
							switch($m){
								case 1 :
									$views_partial_layout = $folder_themes.'/partials/mandiri.php';
									break;
								case 2 :
									$views_partial_layout = $folder_themes.'/partials/layanan.php';
									break;
								case 4 :
									$views_partial_layout = Web_Controller::fallback_default($this->theme,'/partials/bantuan.php');
									break;
								default:
									$views_partial_layout = $folder_themes.'/partials/lapor.php';
							}
							$this->load->view($views_partial_layout);
						?>
					</div>
				</div>
			</div>

			<div id="rightcolumn">
				<div class="innertube">
					<?php $this->load->view($folder_themes.'/partials/side.right.php');?>
				</div>
			</div>

			<div id="footer">
				<?php $this->load->view($folder_themes.'/partials/copywright.tpl.php');?>
			</div>
		</div>
	</body>
</html>
