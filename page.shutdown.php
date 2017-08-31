<?php /*$Id*/
if (!defined('FREEPBX_IS_AUTH')) { die('No direct script access allowed'); }
/* 
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of version 2 the GNU General Public
 * License as published by the Free Software Foundation.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 */
?>

<div id="infoModal" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-body">
				<p><?php echo _('Are you sure you want to continue?')?></p>
			</div>
			<div class="modal-footer">
				<form method="POST">
					<button type="submit" class="btn btn-primary" name="shutdown" id="send"><?php echo _('Ok')?></button>
					<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo _('Cancel')?></button>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="fpbx-container">
				<div class="display no-border">
					<div class="container-fluid">
						<div class="section-title" data-for="asteriskcli">
							<h3><?php echo _("Shutdown the server") ?></h3>
						</div>
						<div class="row">
							<div class="section" data-id="asteriskcli">
								<div class="element-container">
									<div class="row">
										<div class="col-md-12">
											<form class="form-inline" role="form">
												<div calss="form-group">
													<label class = "control-label"><?php echo _('Select command')?></label>
													<select id="command" class="form-control"> 
														<option value=0><?php echo _('Shutdown')?></option>
														<option value=1><?php echo _('Reboot')?></option>
													</select>
													<button class="btn btn-info btn-lg" type="button" id="modalShowBtn"><?php echo _('Send Command')?></button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class = "output">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
