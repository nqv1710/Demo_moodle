<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Atto text editor integration version file.
 *
 * @package    atto_morefontcolors
 * @copyright  2014-2021 Universit√© de Lausanne
 * @author     Nicolas Dunand <nicolas.dunand@unil.ch>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$ADMIN->add('editoratto', new admin_category('atto_morefontcolors', new lang_string('pluginname', 'atto_morefontcolors')));

$settings = new admin_settingpage('atto_morefontcolors_settings', new lang_string('pluginname', 'atto_morefontcolors'));
if ($ADMIN->fulltree) {
    $name = new lang_string('availablecolors', 'atto_morefontcolors');
    $desc = new lang_string('availablecolors_desc', 'atto_morefontcolors');
    $default = '#3366FF #6633FF #CC33FF #FF33CC
#33CCFF #003DF5 #002EB8 #FF3366
#33FFCC #B88A00 #F5B800 #FF6633
#33FF66 #66FF33 #CCFF33 #FFCC33';
    $setting = new admin_setting_configtextarea('atto_morefontcolors/availablecolors', $name, $desc, $default);
    $settings->add($setting);

    $name = new lang_string ('setting_custom', 'atto_morefontcolors');
    $desc = new lang_string ('setting_custom_desc', 'atto_morefontcolors');
    $default = 0;
    $setting = new admin_setting_configcheckbox ('atto_morefontcolors/allowcustom', $name, $desc, $default);
    $settings->add ($setting);
}
