// Isi file: gmnaqib/hello_dev/.../classes/output/mobile.php
<?php
defined('MOODLE_INTERNAL') || die();

namespace block_hello_dev\output;

use renderable;
use templatable;
use stdClass;

/**
 * Mobile renderer for block_hello_dev.
 */
class mobile implements renderable, templatable
{

    /** @var stdClass $config Block instance configuration */
    protected $config;

    /**
     * Constructor
     * @param stdClass $config Block instance configuration.
     */
    public function __construct($config)
    {
        $this->config = $config;
    }

    /**
     * Export the data to be used in the mustache template.
     *
     * @param \renderer_base $renderer The renderer.
     * @return array
     */
    public function export_for_template(\renderer_base $renderer)
    {
        $data = [];

        // Ambil teks dari konfigurasi block (config_text)
        if (!empty($this->config->config_text)) {
            // Gunakan $this->config->config_text karena didefinisikan di edit_form.php
            $text = $this->config->config_text;
        } else {
            // Fallback ke string default jika belum dikonfigurasi
            $text = get_string('blockstring', 'block_hello_dev');
        }

        $data['content'] = $text;

        return $data;
    }
}
