<?php
/**
 * @version    CVS: 2.1.1
 * @package    Com_Manifest2md
 * @author     Emmanuel Lecoester <elecoest@gmail.com>
 * @author     Marc Letouzé <marc.letouze@liubov.net>
 * @license    GNU General Public License version 2 ou version ultérieure ; Voir LICENSE.txt
 */

defined('JPATH_BASE') or die;

jimport('joomla.form.formfield');

/**
 * Supports an HTML select list of categories
 *
 * @since  1.6
 */
class JFormFieldFileMultiple extends JFormField
{
    /**
     * The form field type.
     *
     * @var        string
     * @since    1.6
     */
    protected $type = 'file';

    /**
     * Method to get the field input markup.
     *
     * @return    string    The field input markup.
     *
     * @since    1.6
     */
    protected function getInput()
    {
        // Initialize variables.
        $html = '<input type="file" name="' . $this->name . '[]" multiple >';

        return $html;
    }
}
