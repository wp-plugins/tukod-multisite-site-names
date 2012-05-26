<?php

/**
 * Plugin Name: TuKod MultiSite Site Names
 * Plugin URI: http://tukod.com/to-code-projects/tukod-multisite-site-names/
 * Description: Expands Site Name choices during the sign up process. These include removing username prohibitions, having all number Site Names (like "143"), and adding "internal" dashes "-" (hyphens) in all multisites signups. Sub-Directory sites may additionally use UpperCase (A-Z capital letters), plus "internal" dots "." (periods), underscores "_", and tildes "~". "Internal" means it has a letter or number on both sides.
 * Version: 0.1.0.0
 * Revision Date: 05/06/2012
 * Requires at least: WP 3.1
 * Tested up to: WP 3.3.1
 * License: GNU General Public License 2.0 (GPL) or later
 * Author: TuKod Team
 * Author URI: http://tukod.com/to-code-about/tukod-team/
 * Network: True
 * Tags: blog, name, multi, site, sitename, blogname, multisite, tukod, network, multinetorks, networks, dash, hyphen, dot, period, uppercase, capitals, lowercase, username, user, name, underscore, tilde, letters, numbers, internal
 */

/*
 ***********************************************************************
 *          _____      _  __         _    ____                         *
 *         |_   _|   _| |/ /___   __| |  / ___|___  _ __ ___           *
 *           | || | | | ' // _ \ / _` | | |   / _ \| '_ ` _ \          *
 *           | || |_| | . \ (_) | (_| |_| |__| (_) | | | | | |         *
 *           |_| \__,_|_|\_\___/ \__,_(_)\____\___/|_| |_| |_|         *
 *                                                                     *
 *         ===================================================         *
 *                                                                     *
 ***********************************************************************
 *	      ____________________________________________________
 *       |                                                    |
 *       |             TuKod MultiSite Site Names             |
 *       |              © TuKod Team (TuKod.Com)              |
 *       |____________________________________________________|
 *
 * © Copyright 2011-2012 TuKod Team (TuKod.Com) percy at gamot dot net
 *
 *   This program is free software; you can redistribute it and/or
 *   modify it under the terms of the GNU General Public License as
 *   published by the Free Software Foundation; either version 2 of
 *   the License, or (at your option) any later version.
 *
 *   This program is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 ***********************************************************************
 *      _   _   _   _   _   _   _   _   _   _   _   _   _   _   _
 *     / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \
 *    ( S | T | A | N | D | A | R | D | I | Z | A | T | I | O | N )
 *     \_/ \_/ \_/ \_/ \_/ \_/ \_/ \_/ \_/ \_/ \_/ \_/ \_/ \_/ \_/
 *
 *   - This include file was adapted to use WordPress 3.1 and newer.
 *
 *   - Namespace and coding is being adapted to the:
 *     TAIT STYLE Coding Standard
 *
 *   - http://t8s.org/tait-style/
 *
 ***********************************************************************
 *       ____   __    ____  ____     ___  ____  _  _  __    ____       *
 *      (_  _) /__\  (_  _)(_  _)   / __)(_  _)( \/ )(  )  ( ___)      *
 *        )(  /(__)\  _)(_   )(     \__ \  )(   \  /  )(__  )__)       *
 *       (__)(__)(__)(____) (__)    (___/ (__)  (__) (____)(____)      *
 *                                                                     *
 ***********************************************************************
 *
 *   - Further it was adapted to accomidate the Network Admin Menu
 *     Sections within WordPress MultiSite 3.1 and newer.
 *
 ***********************************************************************
 *    _   _   _   _   _   _   _   _   _   _   _   _   _   _   _   _
 *   / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \
 *  ( A | C | K | N | O | W | L | E | D | G | E | M | E | N | T | S )
 *   \_/ \_/ \_/ \_/ \_/ \_/ \_/ \_/ \_/ \_/ \_/ \_/ \_/ \_/ \_/ \_/
 *
 *   - A BIG THANKS goes to Lan Tait for all the assistance and
 *     code snippets he provided. This project would not be possible
 *     without his effort.
 *
 *   - http://alantait.net/
 *
 ***********************************************************************
 *  ____ ____ ____ ____ ____ ____ ____ ____ ____ ____ ____ ____ ____   *
 * ||P |||r |||o |||g |||r |||a |||m |||i |||n |||g |||_ |||B |||y ||  *
 * ||__|||__|||__|||__|||__|||__|||__|||__|||__|||__|||__|||__|||__||  *
 * |/__\|/__\|/__\|/__\|/__\|/__\|/__\|/__\|/__\|/__\|/__\|/__\|/__\|  *
 *   ||a |||L |||a |||n |||T |||a |||i |||t |||. |||N |||e |||t ||     *
 *   ||__|||__|||__|||__|||__|||__|||__|||__|||__|||__|||__|||__||     *
 *  _|/__\|/__\|/__\|/__\|/__\|/__\|/__\|/__\|/__\|/__\|/__\|/__\|__   *
 * ||a ||||L |||a |||n |||  Lan Tait Keyboard  |||T |||a |||i |||t ||  *
 * ||__||||__|||__|||__|||_____________________|||__|||__|||__|||__||  *
 * |/__\||/__\|/__\|/__\|/_____________________\|/__\|/__\|/__\|/__\|  *
 *                                                                     *
 ***********************************************************************
 *            _   _   _   _   _   _   _   _   _   _   _   _
 *           / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \
 *          ( I | N | S | T | A | L | L | A | T | I | O | N )
 *           \_/ \_/ \_/ \_/ \_/ \_/ \_/ \_/ \_/ \_/ \_/ \_/
 *                  _   _   _       _   _   _   _   _
 *                 / \ / \ / \     / \ / \ / \ / \ / \
 *                ( A | N | D |   | U | S | A | G | E )
 *                 \_/ \_/ \_/     \_/ \_/ \_/ \_/ \_/
 *
 *   - Visit the plugin's homepage:
 *
 *   - http://tukod.com/to-code-projects/tukod-multisite-site-names/
 *
 ***********************************************************************
 *    ___           ___           ___           ___           ___      *
 *   /\  \         /\__\         /\__\         /\  \         /\  \     *
 *   \:\  \       /:/  /        /:/  /        /::\  \       /::\  \    *
 *    \:\  \     /:/  /        /:/__/        /:/\:\  \     /:/\:\  \   *
 *    /::\  \   /:/  /  ___   /::\__\____   /:/  \:\  \   /:/  \:\__\  *
 *   /:/\:\__\ /:/__/  /\__\ /:/\:::::\__\ /:/__/ \:\__\ /:/__/ \:|__| *
 *  /:/  \/__/ \:\  \ /:/  / \/_|:|~~|~    \:\  \ /:/  / \:\  \ /:/  / *
 * /:/  /       \:\  /:/  /     |:|  |      \:\  /:/  /   \:\  /:/  /  *
 * \/__/         \:\/:/  /      |:|  |       \:\/:/  /     \:\/:/  /   *
 *                \::/  /       |:|  |        \::/  /       \::/__/    *
 *                 \/__/         \|__|         \/__/         ¯¯        *
 *           ___           ___           ___           ___             *
 *          /\  \         /\  \         /\  \         /\__\            *
 *          \:\  \       /::\  \       /::\  \       /::|  |           *
 *           \:\  \     /:/\:\  \     /:/\:\  \     /:|:|  |           *
 *           /::\  \   /::\~\:\  \   /::\~\:\  \   /:/|:|__|__         *
 *          /:/\:\__\ /:/\:\ \:\__\ /:/\:\ \:\__\ /:/ |::::\__\        *
 *         /:/  \/__/ \:\~\:\ \/__/ \/__\:\/:/  / \/__/~~/:/  /        *
 *        /:/  /       \:\ \:\__\        \::/  /        /:/  /         *
 *        \/__/         \:\ \/__/        /:/  /        /:/  /          *
 *                       \:\__\         /:/  /        /:/  /           *
 *                        \/__/         \/__/         \/__/            *
 *                                                                     *
 ***********************************************************************
 *
 */

require_once ( dirname(__FILE__) . '/inc.tukod-plugin-framework.php' );

if ( ! class_exists( 'TuKod_MultiSite_Site_Names' ) ) {
	class TuKod_MultiSite_Site_Names extends TuKod_MultiSite_Site_Names_TuKod_Plugin_Framework {


		/**
		 * The constructor
		 *   Adds main Actions and Filters
		 *
		 */
		public function __construct() {

			// Actions
			if ( function_exists( 'add_action' ) ) {
				add_action( 'network_admin_menu',
					array( &$this, 'network_admin_menu' )
				);
			}

			// Filters
			if ( function_exists( 'add_filter' ) ) {
				add_filter( 'wpmu_validate_blog_signup',
					array( &$this, 'wpmu_validate_blog_signup' )
				);
			}
		}


		/**
		 * Validates and
		 *    adjusts the wp-signup.php page inputs.
		 *
		 */
		public function wpmu_validate_blog_signup( $result ) {
			$this->multisite_init();

			$olderrors = $result[ 'errors' ];

			// Is Site Name ('blogname') too short?
			if ( strlen( $result[ 'blogname' ] ) < $this->g_opt[ 'tukod_mssn_length' ]
				&& ! is_super_admin()
			) {
				$too_short = 'short';
			} else {
				$too_short = 'okay';
			}

			// If Site Name ('blogname') is long enough,
			// and we have no error object, just return.
			if ( ! is_object( $olderrors ) && 'okay' == $too_short ) {
				return $result;
			}

			// Build a new WP_Error Object to hold new errors.
			$errors = new WP_Error();

			// Look for a 'blogname' $code error in this loop.
			foreach ( $olderrors->errors as $code => $error ) {
				if ( $code == 'blogname' ) {
					// Sort the 'blogname' error $value with this loop.
					foreach ( $error as $key => $value ) {
						// Switch each action based on the $error $value
						// and our slected options.
						switch ( $value ) {

							case "Only lowercase letters and numbers allowed":
								$ok_chars = '';

								// Allow Internal Dashes
								if ( 1 == $this->g_opt[ 'tukod_mssn_dashes' ] ) {
									$ok_chars .= '-';
								}

								// Allow Internal Periods
								if ( 1 == $this->g_opt[ 'tukod_mssn_period' ] ) {
									$ok_chars .= '.';
								}

								// Allow Internal Tildes
								if ( 1 == $this->g_opt[ 'tukod_mssn_tilde' ] ) {
									$ok_chars .= '~';
								}

								// Allow Internal Underscores
								if ( 1 == $this->g_opt[ 'tukod_mssn_scores' ] ) {
									$ok_chars .= '_';
								}

								// Allow Uppercase Letters
								if ( 1 == $this->g_opt[ 'tukod_mssn_upper' ] ) {
									$u_case .= 'i';
								} else {
									$u_case .= '';
								}

								$pattern = '/^[a-z0-9]+([' . $ok_chars . ']?[a-z0-9]+)*$/' . $u_case;
								preg_match( $pattern, $result[ 'blogname' ], $match );

								if ( $result[ 'blogname' ] != $match[ 0 ] ) {
									// Build a new error to add to the $errors object
									// Allow Lowercase Letters
									$ok_chars = __( 'Only the following Characters are allowed: lowercase letters "a-z"', $this->g_info[ 'ShortName' ] );

									// Allow Uppercase Letters
									if ( 1 == $this->g_opt[ 'tukod_mssn_upper' ] ) {
										$ok_chars .= __( ', uppercase letters "A-Z"', $this->g_info[ 'ShortName' ] );
									}

									// Allow Internal Dashes
									if ( 1 == $this->g_opt[ 'tukod_mssn_dashes' ] ) {
										$ok_chars .= __( ', internal "-" dashes or hyphens', $this->g_info[ 'ShortName' ] );
									}

									// Allow Internal Periods
									if ( 1 == $this->g_opt[ 'tukod_mssn_period' ] ) {
										$ok_chars .= __( ', internal "." dots or periods', $this->g_info[ 'ShortName' ] );
									}

									// Allow Internal Tildes
									if ( 1 == $this->g_opt[ 'tukod_mssn_tilde' ] ) {
										$ok_chars .= __( ', internal "~" tildes', $this->g_info[ 'ShortName' ] );
									}

									// Allow Internal Underscores
									if ( 1 == $this->g_opt[ 'tukod_mssn_scores' ] ) {
										$ok_chars .= __( ', internal "_" underscores', $this->g_info[ 'ShortName' ] );
									}

									// Allow Numbers
									$ok_chars .= __( ', and numbers (0-9) anywhere!', $this->g_info[ 'ShortName' ] );

									// Add the new error to the $errors object
									$errors->add( 'blogname', $ok_chars );
								}

								if ( 1 != $this->g_opt[ 'tukod_mssn_dashes' ] && strpos( ' ' . $result[ 'blogname' ], '-' ) >= 1 ) {
									$errors->add( 'blogname', __( 'Sorry, site names may not contain the dash "-" (hyphen) character!', $this->g_info[ 'ShortName' ] ) );
								}

								if ( 1 != $this->g_opt[ 'tukod_mssn_period' ] && strpos( ' ' . $result[ 'blogname' ], '.' ) >= 1 ) {
									$errors->add( 'blogname', __( 'Sorry, site names may not contain the dot "." (period) character!', $this->g_info[ 'ShortName' ] ) );
								}

								if ( 1 != $this->g_opt[ 'tukod_mssn_tilde' ] && strpos( ' ' . $result[ 'blogname' ], '~' ) >= 1 ) {
									$errors->add( 'blogname', __( 'Sorry, site names may not contain the tilde "~" character!', $this->g_info[ 'ShortName' ] ) );
								}

								if ( 1 != $this->g_opt[ 'tukod_mssn_scores' ] && strpos( ' ' . $result[ 'blogname' ], '_' ) >= 1 ) {
									$errors->add( 'blogname', __( 'Sorry, site names may not contain the underscore "_" character!', $this->g_info[ 'ShortName' ] ) );
								}

								break;

							case "Site name must be at least 4 characters":
								// Do Nothing, just break
								break;

							case "Sorry, site names may not contain the character &#8220;_&#8221;!":
								// Do Nothing, just break
								break;

							case "Sorry, site names must have letters too!":
								if ( 1 != $this->g_opt[ 'tukod_mssn_number' ] ) {
									$errors->add( 'blogname', __( "Sorry, site names must NOT be all numbers." ) );
								}
								break;

							case "Sorry, that site is reserved!":
								if ( 1 != $this->g_opt[ 'tukod_mssn_siteuser' ] ) {
									$errors->add( 'blogname', __( "Sorry, that site is reserved!" ) );
								}
								break;
							default:
								$errors->add( 'blogname', $value );
						} // end switch ($value)
					} // end foreach ($error as $key => $value)
				} else {
					// Add other errors to $error object from the nested arrays.
					foreach ( $error as $key => $value ) {
						$errors->add( $code, $value );
					}
				} // end if ($code == 'blogname')
			} // end foreach ($olderrors->errors as $code => $error)

			// Add an new error for being too short.
			if ( 'short' == $too_short ) {
				$errors->add( 'blogname', __( "Number if characters in a sitename must be at least ", $this->g_info[ 'ShortName' ] ) . $this->g_opt[ 'tukod_mssn_length' ] );
			}


/*
//// LANmark Test5
echo '<br /><br /><br />';
echo '<br />print_r($result) ~ Before<br />';
echo '<pre>';
print_r($result);
echo '</pre>';
echo '<br /><br /><br />';
*/


			// Unset old errors object in $result
			unset( $result[ 'errors' ] );
			// Set new errors object in $result
			$result[ 'errors' ] = $errors;


/*
//// LANmark Test6
echo '<br /><br /><br />';
echo '<br />print_r($result) ~ After<br />';
echo '<pre>';
print_r($result);
echo '</pre>';
echo '<br /><br /><br />';
*/


			return $result;
		} // end function wpmu_validate_blog_signup


		/**
		 * Populate and output the network options page
		 *   Includes the menu and samples.
		 *
		 */
		public function network_options_page() {
			global $wp_version;

			if ( 1 == $this->g_opt[ 'tukod_mssn_examples' ] ) {
				$tukod_example = 4;
			}

			if ( ! defined( 'TUKOD_MSSN' ) ) {
				define( 'TUKOD_MSSN', false );
			}

				//// LANmark Test1 if ( version_compare( $wp_version, "3.3.2", "<" ) ) { // Bypass Line Below for Testing ~ Delete This Line for Production
			if ( version_compare( $wp_version, "3.1", "<" ) ) {
				$tukod_example = 1;
				$this->show_wp_version_error();
				//// LANmark Test2 } elseif ( is_multisite() ) { // Bypass Next Line for Testing ~ Delete This Line for Production
			} elseif ( ! is_multisite() ) {
				$tukod_example = 2;
				$this->show_multisite_install_error();
				//// LANmark Test3 } elseif ( TUKOD_MSSN ) { // Bypass Next Line for Testing ~ Delete This Line for Production
			} elseif ( ! TUKOD_MSSN ) {
				$tukod_example = 3;
				$this->show_configuration_error();
			} else {
				$this->show_menu_header();

				//// LANmark Test4 if ( ! is_subdomain_install() ) { // Bypass Next Line for Testing Subdirectory
				if ( is_subdomain_install() ) {
					$this->subdomain_menu();
				} else {
					$this->subdirectory_menu();
				} // end if ( is_subdomain_install() )

			} // end if ( version_compare...

			if ( isset( $tukod_example ) ) {
				$this->show_site_names_testing( $tukod_example, $wp_version );
				$this->show_congrats_or_next_step( $tukod_example );
				$this->show_example_header();
				$this->show_example_subdomains();
				$this->show_example_subdirectories();
			} // end if ( isset( $tukod_example ) )

			// Sidebar, we can also add individual items...
			$this->PrepareStandardSidebar();
			$this->GetGeneratedOptionsPage();

		} // end function network_options_page


		/**
		 * Shows output for
		 *   WordPress Version Error
		 *     Must be at least version 3.1
		 */
		public function show_wp_version_error( $wp_ver ) {
			$title_tukod = __( 'TuKod MultiSite Site Names WordPress Error', $this->g_info[ 'ShortName' ] );
			$message_tukod = '
			<table class="form-table">
				<tbody>
					<tr valign="top">
						<th scope="row">
							TuKod Verified:
						</th>
						<td>
							<span style="color:red"><strong>Your WordPress is
								Too Old. Version ' . $wp_ver . '</strong></span>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row"><em>TuKod MultiSite Site Names</em></th>
						<td>
							Requires WordPress 3.1 or newer. Please update!
						</td>
					</tr>
				</tbody>
			</table>';

			$this->AddContentMain( $title_tukod, $message_tukod );
		} // end show_wp_version_error


		/**
		 * Shows output for
		 *   MultiSite Install Error
		 *
		 */
		public function show_multisite_install_error() {
			$title = __( 'TuKod MultiSite Site Names MultiSite Install Error', $this->g_info[ 'ShortName' ] );
			$message = '
			<table class="form-table">
				<tbody>
					<tr valign="top">
						<th scope="row">
							TuKod Verified:
						</th>
						<td>
							<span style="color:red"><strong>WordPress MultiSite
								Not Installed</strong></span>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<em>TuKod MultiSite Site Names</em>
						</th>
						<td>
							Requires WordPress MultiSite to be installed.
								Please Install MultiSite!
						</td>
					</tr>
				</tbody>
			</table>';

			$this->AddContentMain( $title, $message );
		} // end show_multisite_install_error


		/**
		 * Shows output for
		 *   Configuration Error
		 *     wp-config.php
		 */
		public function show_configuration_error() {
			$title = __( 'TuKod MultiSite Site Names Configuration Error', $this->g_info[ 'ShortName' ] );
			$message = '
			<table class="form-table">
				<tbody>
					<tr valign="top">
						<th scope="row">TuKod Verified:</th>
						<td>
							<span style="color:red"><strong>WordPress Configuration Error</strong></span>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<em>TuKod&nbsp;MultiSite&nbsp;Site&nbsp;Names:</em>
						</th>
						<td>
							Requires the following confituration change in
								<strong><em>wp-config.php</em></strong>. Please adjust!
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<span style="color:red"><strong>Find</strong> this line:</span>
						</th>
						<td>
							';
							$message .= "<strong>define( 'DOMAIN_CURRENT_SITE', '" . DOMAIN_CURRENT_SITE ."' );</strong>";
							$message .= '
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<span style="color:red"><strong>Replace</strong> it with:</span>
						</th>
						<td>
							<textarea class="code" readonly="readonly" cols="70" rows="1">';
							$message .= "define( 'TUKOD_MSSN', true );";
							$message .= '</textarea>
						</td>
					</tr>
				</tbody>
			</table>';

			$this->AddContentMain( $title, $message );
		} // end show_configuration_error


		/**
		 * Shows output for
		 *   Menu Header
		 *
		 */
		public function show_menu_header() {
			$this->AddContentMain( __( 'TuKod MultiSite Site Names', $this->g_info[ 'ShortName' ] ),
				__( 'Allow new registrations usually has a Default Minimum
				Site Name Length of four (4) characters. Likewise they
				have the following options disabled by Default.', $this->g_info[ 'ShortName' ] )
				. '<br /><br />' .
				__( 'These settings permit you to choose which settings are
				acceptable on your network.', $this->g_info[ 'ShortName' ] )
			);
		}


		/**
		 * Subdomain Menu
		 *
		 *
		 */
		public function subdomain_menu() {
			$title = __( 'Sub-Domain Settings', $this->g_info[ 'ShortName' ] );
			$message = '
			<table class="form-table">
				<tbody>
					<tr valign="top">
						<th scope="row">
							<h4>TuKod Verified:</h4>
						</th>
						<td>
							<h4>MultiSite Sub-Domain Installed</h4>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<strong>Sub-Domain Examples:</strong>
						</th>
						<td>
							http://<strong>precila<span
								style="color:red;">-</span>cauresma<span
								style="color:red;">-</span>andes</strong>.example.com/
							<br />http://<strong><span
								style="color:red;">90210</span></strong>.example.com/
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<strong>Permit These Options:</strong>
							<br />Default: Not Permitted<br />(Not Checked)
						</th>
						<td>
							<label>
								<input name="tukod_mssn_siteuser"
								id="tukod_mssn_siteuser" value="1" type="checkbox" ';
								if ( 1 == $this->g_opt[ 'tukod_mssn_siteuser' ] ) {
									$message .= 'checked="checked"';
								}
								$message .= '> <strong>SiteUser</strong>
								<em>(SiteNames may equal UserNames!)</em>
								This is great with
								<strong><em>TuKod Multi Networks</em></strong>
								for Adding Domain Names!
							</label>
							<br />
							<label>
								<input name="tukod_mssn_dashes"
								id="tukod_mssn_dashes" value="1" type="checkbox" ';
								if ( 1 == $this->g_opt[ 'tukod_mssn_dashes' ] ) {
									$message .= 'checked="checked"';
								}
								$message .= '> <strong>Dashes
								"<span style="color:red;">-</span>"</strong> (Hyphen)
								(http://<strong>precila<span
								style="color:red;">-</span>cauresma<span
								style="color:red;">-</span>andes</strong>.example.com/)
							</label>
							<br />
							<label>
								<input name="tukod_mssn_number"
								id="tukod_mssn_number" value="1" type="checkbox" ';
								if ( 1 == $this->g_opt[ 'tukod_mssn_number' ] ) {
									$message .= 'checked="checked"';
								}
								$message .= '> <strong>All Numbers</strong>
								(http://<strong><span
								style="color:red;">90210</span></strong>.example.com/)
							</label>
							<br />
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<strong>Site Name Minimum Length:</strong>
						</th>
						<td>
							<select name="tukod_mssn_length"
								id="tukod_mssn_length">';

							for ( $i = 1; $i <= 10; $i++ ) {
								if ( $i != $this->g_opt[ 'tukod_mssn_length' ] ) {
									$message .= "
									<option value=$i>$i</option>";
								} else {
									$message .= "
									<option value=$i selected='selected'>$i</option>";
								}
							}

							$message .= '
							</select>
							(Default: 4)
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<strong>Tests &amp; Examples:</strong>
						</th>
						<td>
							<label>
								<input name="tukod_mssn_examples"
								id="tukod_mssn_examples" value="1" type="checkbox" ';
								if ( 1 == $this->g_opt[ 'tukod_mssn_examples' ] ) {
									$message .= 'checked="checked"';
								}
								$message .= '> <strong>Show Test Results &amp;
								Examples</strong>
							</label>
							<br />
						</td>
					</tr>
				</tbody>
			</table>';

			$this->AddContentMain( $title, $message );
		}


		/**
		 * Subdirectory Menu
		 *
		 *
		 */
		public function subdirectory_menu() {
			$title = __( 'Sub-Directory Settings', $this->g_info[ 'ShortName' ] );
			$message = '
			<table class="form-table">
				<tbody>
					<tr valign="top">
						<th scope="row">
							<h4>TuKod Verified:</h4>
						</th>
						<td>
							<h4>MultiSite Sub-Directory Installed</h4>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<strong>Sub-Directory Example:</strong>
						</th>
						<td>
							http://example.com/<strong><span
								style="color:red;">M</span>rs<span
								style="color:red;">.P</span>recila<span
								style="color:red;">_C</span>auresma<span
								style="color:red;">-A</span>ndes<span
								style="color:red;">~T</span>ait</strong>/
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<strong>Permit These Options:</strong>
							<br />Default: Not Permitted<br />(Not Checked)
						</th>
						<td>
							<label>
								<input name="tukod_mssn_siteuser"
								id="tukod_mssn_siteuser" value="1" type="checkbox" ';
								if ( 1 == $this->g_opt[ 'tukod_mssn_siteuser' ] ) {
									$message .= 'checked="checked"';
								}
								$message .= '> <strong>Site Names</strong>
							</label>
							<br />
							<label>
								<input name="tukod_mssn_dashes"
								id="tukod_mssn_dashes" value="1" type="checkbox" ';
								if ( 1 == $this->g_opt[ 'tukod_mssn_dashes' ] ) {
									$message .= 'checked="checked"';
								}
								$message .= '> <strong>Dashes "<span
								style="color:red;">-</span>"</strong> (Hyphen)
								(http://example.com/<strong>precila<span
								style="color:red;">-</span>cauresma<span
								style="color:red;">-</span>andes</strong>/)
							</label>
							<br />
							<label>
								<input name="tukod_mssn_number"
								id="tukod_mssn_number" value="1" type="checkbox" ';
								if ( 1 == $this->g_opt[ 'tukod_mssn_number' ] ) {
									$message .= 'checked="checked"';
								}
								$message .= '> <strong>All Numbers</strong>
								(http://example.com/<strong><span
								style="color:red;">90210</span></strong>/)
							</label>
							<br />
							<label>
								<input name="tukod_mssn_scores"
								id="tukod_mssn_scores" value="1" type="checkbox" ';
								if ( 1 == $this->g_opt[ 'tukod_mssn_scores' ] ) {
									$message .= 'checked="checked"';
								}
								$message .= '> <strong>Underscores "<span
								style="color:red;">_</span>"</strong>
								(http://example.com/<strong>precila<span
								style="color:red;">_</span>cauresma<span
								style="color:red;">_</span>andes</strong>/)
							</label>
							<br />
							<label>
								<input name="tukod_mssn_upper"
								id="tukod_mssn_upper" value="1" type="checkbox" ';
								if ( 1 == $this->g_opt[ 'tukod_mssn_upper' ] ) {
									$message .= 'checked="checked"';
								}
								$message .= '> <strong>UpperCase "<span
								style="color:red;">A-Z</span>"</strong> Letters
								(http://example.com/<strong><span
								style="color:red;">P</span>recila<span
								style="color:red;">C</span>auresma<span
								style="color:red;">A</span>ndes</strong>/)
							</label>
							<br />
							<label>
								<input name="tukod_mssn_period"
								id="tukod_mssn_period" value="1" type="checkbox" ';
								if ( 1 == $this->g_opt[ 'tukod_mssn_period' ] ) {
									$message .= 'checked="checked"';
								}
								$message .= '> <strong>Periods "<span
								style="color:red;">.</span>"</strong>
								(http://example.com/<strong>precila<span
								style="color:red;">.</span>cauresma<span
								style="color:red;">.</span>andes</strong>/)
							</label>
							<br />
							<label>
								<input name="tukod_mssn_tilde"
								id="tukod_mssn_tilde" value="1" type="checkbox" ';
								if ( 1 == $this->g_opt[ 'tukod_mssn_tilde' ] ) {
									$message .= 'checked="checked"';
								}
								$message .= '> <strong>Tildes "<span
								style="color:red;">~</span>"</strong>
								(http://example.com/<strong>precila<span
								style="color:red;">~</span>cauresma<span
								style="color:red;">~</span>andes</strong>/)
							</label>
							<br />
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<strong>Site Name Minimum Length:</strong>
						</th>
						<td>
							<select name="tukod_mssn_length"
								id="tukod_mssn_length">';

						for ( $i = 1; $i <= 10; $i++ ) {
							if ( $i != $this->g_opt[ 'tukod_mssn_length' ] ) {
								$message .= "
								<option value=$i>$i</option>";
							} else {
								$message .= "
								<option value=$i selected='selected'>$i</option>";
							}
						}

							$message .= '
							</select>
							(Default: 4)
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<strong>Tests &amp; Examples:</strong>
						</th>
						<td>
							<label>
								<input name="tukod_mssn_examples"
								id="tukod_mssn_examples" value="1" type="checkbox" ';
								if ( 1 == $this->g_opt[ 'tukod_mssn_examples' ] ) {
									$message .= 'checked="checked"';
								}
								$message .= '> <strong>Show Test Results and Examples</strong>
							</label>
							<br />
						</td>
					</tr>
				</tbody>
			</table>
			';

			$this->AddContentMain( $title, $message );
		} // end function subdirectory_menu


		/**
		 * Shows output for
		 *   Site Names Plugin Testing
		 *
		 */
		public function show_site_names_testing( $n = 4, $wp_ver ) {
			$title = __( 'TuKod MultiSite Site Names Testing', $this->g_info[ 'ShortName' ] );
			$message = '
			<table class="form-table">
				<tbody>';
					$td_a = '
					<tr valign="top">
						<th scope="row">
							' . __( 'TuKod Verified:', $this->g_info[ 'ShortName' ] ) . '
						</th>
						<td>
							';
					$td_b = '
						</td>
					</tr>';

			switch ( $n ) {
				case ( 1 ):
					$message .= $td_a;
					$message .= __( 'Upgrade! Required WordPress Version is 3.1 or newer. Your Version is:', $this->g_info[ 'ShortName' ] ) . ' ' . $wp_ver;
					$message .= $td_b;
					break;
				case ( 4 ):
					$message .= $td_a;
					$message .= __( 'WordPress wp-config.php Configured.', $this->g_info[ 'ShortName' ] );
					$message .= $td_b;
				case ( 3 ):
					$message .= $td_a;
					$message .= __( 'WordPress MultiSite is Installed.', $this->g_info[ 'ShortName' ] );
					$message .= $td_b;
				case ( 2 ):
					$message .= $td_a;
					$message .= __( 'Your WordPress is Version:', $this->g_info[ 'ShortName' ] ) . ' ' . $wp_ver .
							'<br /> ' . __( 'WordPress Version 3.1 or newer is Required.', $this->g_info[ 'ShortName' ] );
					$message .= $td_b;
			} // end switch ( $n )

			$message .= '
				</tbody>
			</table>';

			$this->AddContentMain( $title, $message );
		} // end show_site_names_testing


		/**
		 * Shows output for
		 *   Congratulation or
		 *     Next Step
		 */
		public function show_congrats_or_next_step( $n = 4 ) {
			$title = __( 'TuKod MultiSite Site Names Install Next Step', $this->g_info[ 'ShortName' ] );
			$message = '
			<table class="form-table">
				<tbody>
					<tr valign="top">
						<th scope="row">
							' . __( 'Next Step:', $this->g_info[ 'ShortName' ] ) . '
						</th>
						<td>';
			switch ( $n ) {
				case ( 1 ):
					$message .= '
							<span style="color:red">'
						. __( 'Upgrade to the latest (newest) version of WordPress!', $this->g_info[ 'ShortName' ] )
						. '</span>';
					break;
				case ( 2 ):
					$message .= '
							<span style="color:red">'
						. __( 'Install WordPress MultiSite', $this->g_info[ 'ShortName' ] )
						. '</span>';
					break;
				case ( 3 ):
					$message .= '
							<span style="color:red">'
						. __( 'Configure wp-config.php!', $this->g_info[ 'ShortName' ] )
						. ' <em>'
						. __( '(See above!)', $this->g_info[ 'ShortName' ] )
						. '</em></span>';
					break;
				case ( 4 ):
					$title = '<em>'
						. __( 'Congratulations Everything is Good!', $this->g_info[ 'ShortName' ] )
						. '</em>';
					$message .= '
							Configure Settings! <em>Everything appears to be properly installed!</em>';
					break;
			} // end switch ($n)
			$message .= '
						</td>
					</tr>
				</tbody>
			</table>';

			$this->AddContentMain( $title, $message );
		} // end show_congrats_or_next_step


		/**
		 * Shows output for
		 *   Example Header
		 *
		 */
		public function show_example_header() {
			$this->AddContentMain( __( 'TuKod MultiSite Site Names Examples', $this->g_info[ 'ShortName' ] ), '
				<table class="form-table">
					<tbody>
						<tr valign="top">
							<th scope="row">
								<em>To encourage your efforts...</em>
							</th>
							<td>
								Below are some examples of what type of MultiSite Site
								Names can be created with the <strong><em>TuKod
								MultiSite Site Names</em></strong> Plugin.
							</td>
						</tr>
					</tbody>
				</table>
				'
			);
		} // end show_example_hearer


		/**
		 * Shows output for
		 *   Example Subdomains
		 *
		 */
		public function show_example_subdomains() {
			$this->AddContentMain( __( 'Sub-Domains Examples', $this->g_info[ 'ShortName' ] ), '
				<table class="form-table">
					<tbody>
						<tr valign="top">
							<th scope="row">
								Site Name / User Name
							</th>
							<td>
								No Limitations! No Reserved Site Names. Great for using
									the <strong><em>TuKod Multi Networks</em></strong>
									Plugin for Many Different Domain Names!
							</td>
						</tr>
						<tr valign="top">
							<th scope="row">
								Dashes "<span style="color:red;">-</span>" (Hyphen)
							</th>
							<td>
								http://<strong>precila<span
									style="color:red;">-</span>cauresma<span
									style="color:red;">-</span>andes</strong>.example.com/
							</td>
						</tr>
						<tr valign="top">
							<th scope="row">
								All Numbers "<span style="color:red;">0-9</span>"
							</th>
							<td>
								http://<strong><span
									style="color:red;">90210</span></strong>.example.com/
							</td>
						</tr>
						<tr valign="top">
							<th scope="row">
								Short (1 Char Min.) Site Names
							</th>
							<td>
								http://<strong><span
									style="color:red;">i</span></strong>.example.com/
							</td>
						</tr>
						<tr valign="top">
							<th scope="row">
								Long (10 Char Min.) Site Names
							</th>
							<td>
								http://<strong><span
									style="color:red;">bewildered</span></strong>.example.com/
							</td>
						</tr>
					</tbody>
				</table>
				'
			);
		} // end show_example_subdomains


		/**
		 * Shows output for
		 *   Example Subdirectories
		 *
		 */
		public function show_example_subdirectories() {
			$this->AddContentMain( __( 'Sub-Directories Examples', $this->g_info[ 'ShortName' ] ), '
				<table class="form-table">
					<tbody>
						<tr valign="top">
							<th scope="row">
								Site Name / User Name
							</th>
							<td>
								No Limitations! No Site Names reserved, just because
									they match some User Name!
							</td>
						</tr>
						<tr valign="top">
							<th scope="row">
								Combo Sub-Directory
							</th>
							<td>
								http://example.com/<strong><span
									style="color:red;">M</span>rs<span
									style="color:red;">.P</span>recila<span
									style="color:red;">_C</span>auresma<span
									style="color:red;">-A</span>ndes<span
									style="color:red;">~T</span>ait</strong>/
							</td>
						</tr>
						<tr valign="top">
							<th scope="row">
								Combo Sub-Directory
							</th>
							<td>
								http://example.com/<strong><span
									style="color:red;">M</span>r<span
									style="color:red;">.R</span>onald<span
									style="color:red;">_M</span>c<span
									style="color:red;">-D</span>onalds<span
									style="color:red;">~H</span>amburgers</strong>/
							</td>
						</tr>
						<tr valign="top">
							<th scope="row">
								Dashes "<span style="color:red;">-</span>" (Hyphen)
							</th>
							<td>
								http://example.com/<strong>precila<span
									style="color:red;">-</span>cauresma<span
									style="color:red;">-</span>andes</strong>/
							</td>
						</tr>
						<tr valign="top">
							<th scope="row">
								Tilde "<span style="color:red;">~</span>" (Wavy Line)
							</th>
							<td>
								http://example.com/<strong>precila<span
									style="color:red;">~</span>cauresma<span
									style="color:red;">~</span>andes</strong>/
							</td>
						</tr>
						<tr valign="top">
							<th scope="row">
								Dots "<span style="color:red;">.</span>" (Period)
							</th>
							<td>
								http://example.com/<strong>precila<span
									style="color:red;">.</span>cauresma<span
									style="color:red;">.</span>andes</strong>/
							</td>
						</tr>
						<tr valign="top">
							<th scope="row">
								Underscore "<span style="color:red;">_</span>"
									(Underline)
							</th>
							<td>
								http://example.com/<strong>precila<span
									style="color:red;">_</span>cauresma<span
									style="color:red;">_</span>andes</strong>/
							</td>
						</tr>
						<tr valign="top">
							<th scope="row">
								Caps "<span style="color:red;">A-Z</span>" (Uppercase)
							</th>
							<td>
								http://example.com/<strong><span
									style="color:red;">P</span>recila<span
									style="color:red;">C</span>auresma<span
									style="color:red;">A</span>ndes</strong>/
							</td>
						</tr>
						<tr valign="top">
							<th scope="row">
								All Numbers "<span style="color:red;">0-9</span>"
							</th>
							</th>
							<td>
								http://example.com/<strong><span
									style="color:red;">90210</span></strong>/
							</td>
						</tr>
						<tr valign="top">
							<th scope="row">
								Short (1 Char Min.) Site Names
							</th>
							<td>
								http://example.com/<strong><span
									style="color:red;">U</span></strong>/
							</td>
						</tr>
						<tr valign="top">
							<th scope="row">
								Long (10 Char Min.) Site Names
							</th>
							<td>
								http://example.com/<strong><span
									style="color:red;">BeWilderEd</span></strong>/
							</td>
						</tr>
					</tbody>
				</table>
				'
			);
		} // end show_example_subdirectories


		/**
		 * Convert option prior to save ("COPTSave").
		 * !!!! This function is used by the framework class !!!!
		 *
		 */
		public function COPTSave($optname) {
			if ( 'tukod_mssn_length' == $optname ) {
				if ( isset( $_POST[ 'tukod_mssn_length' ] )
					&& $_POST[ 'tukod_mssn_length' ] >= 1
					&& $_POST[ 'tukod_mssn_length' ] <= 10
				) {
					return $_POST[ 'tukod_mssn_length' ];
				} else {
					return 4;
				}
			} else {
				if ( isset( $_POST[ $optname ] )
					&& 1 == $_POST[ $optname ]
				) {
					return $_POST[ $optname ];
				} else {
					return '0';
				}
			}
		} // end function COPTSave


		/**
		 * Initialize arrays before starting the
		 *   network admin plugin menu
		 *
		 */
		public function network_admin_menu() {
			$this->multisite_init();
			$this->network_admin_plugin_menu();
		}


		/**
		 * Initialize the plugin arrays and populate the default settings
		 *
		 *
		 */
		public function multisite_init() {
			$this->Initialize(
				// 1. We define the plugin information now and do not use get_plugin_data() due to performance.
				array(
					// Plugin name
						'Name' => 'TuKod MultiSite Site Names',
					// Nav name. A shorter name for the navigational menu column.
						'nav_name' => 'TuKod SiteNames',
					// Plugin URI
						'PluginURI' => 'http://tukod.com/to-code-projects/tukod-multisite-site-names/',
					// Plugin version
						'Version' => '0.1.0.0',
					// First plugin version of which we do not reset the plugin options to default;
					// Normally we reset the plugin's options after an update; but if we for example
					// update the plugin from version 2.3 to 2.4 und did only do minor changes and
					// not any option modifications, we should enter '2.3' here. In this example
					// options are being reset to default only if the old plugin version was < 2.3.
						'UseOldOpt' => '0.1.0.0',
					// Author of the plugin
						'Author' => 'TuKod Team',
					// Authot URI
						'AuthorURI' => 'http://tukod.com/to-code-about/tukod-team/',
					// Support URI: E.g. WP or plugin forum, wordpress.org tags, etc.
						'SupportURI' => 'http://tukod.com/donate-to-tukod/feed-us-tukod/',
						// 'http://wordpress.org/tags/math-comment-spam-protection',
					// Name of the options for the options database table
						'OptionName' => 'plugin_tukod_multisite_site_names',
					// Old option names to delete from the options table; newest last please
						//'DeleteOldOpt' =>	array('plugin_mathcommentspamprotection'),
					// Copyright year(s)
						'CopyrightYear' => '2011-2012',
					// Minimum WordPress version
						'MinWP' => '3.1',
					// Do not change; full path and filename of the plugin
						'PluginFile' => __FILE__,
					// Used for language file, nonce field security, etc.
						'ShortName' => 'tukod-site-names',
					// Initialize (add_action in 'init') for 'network', 'site' or 'none'
						'action' => 'none',
					// Network add_submenu_page (not used for site)
					//   ( [Dashboard] index.php, sites.php, users.php, etc. [Default] settings.php )
						'settings_php' => 'sites.php',
				),
				// 2. We define the plugin option names and the initial options
				array(
					'tukod_mssn_length'   => 4,
					'tukod_mssn_siteuser' => 0,
					'tukod_mssn_dashes'   => 0,
					'tukod_mssn_number'   => 0,
					'tukod_mssn_scores'   => 0,
					'tukod_mssn_upper'    => 0,
					'tukod_mssn_period'   => 0,
					'tukod_mssn_tilde'    => 0,
					'tukod_mssn_examples' => 0,
				)
			); // end $this->Initialize
		} // end function multisite_init
	} // end class TuKod_MultiSite_Site_Names
} // end if ( ! class_exists( 'TuKod_MultiSite_Site_Names' ) )


/**
 * Create a new instance of the plugin
 *
 *
 */
new TuKod_MultiSite_Site_Names();
