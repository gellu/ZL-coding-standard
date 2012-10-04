<?php
/**
 * Verifies that control statements conform to their coding standards.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    gellu <grkrysiak@gmail.com>
 */

error_reporting(E_ALL ^ E_NOTICE);

if (class_exists('PHP_CodeSniffer_Standards_AbstractPatternSniff', true) === false) {
    throw new PHP_CodeSniffer_Exception('Class PHP_CodeSniffer_Standards_AbstractPatternSniff not found');
}

/**
 * Verifies that control statements conform to their coding standards.
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    gellu <grkrysiak@gmail.com>
 */
class ZL_Sniffs_ControlStructures_ControlSignatureSniff extends PHP_CodeSniffer_Standards_AbstractPatternSniff
{

    /**
     * A list of tokenizers this sniff supports.
     *
     * @var array
     */
    public $supportedTokenizers = array(
                                   'PHP',
                                   'JS',
                                  );


    /**
     * Returns the patterns that this test wishes to verify.
     *
     * @return array(string)
     */
    protected function getPatterns()
    {
        return array(
                'tryEOL...{...}EOL...catch (...)EOL...{',
                'doEOL...{...}EOL...while (...);EOL',
                'while (...)EOL...{',
                'for (...)EOL...{',
                'if (...)EOL...{',
                'foreach (...)EOL...{',
                '}EOL...else if (...)EOL...{',
                '}EOL...elseEOL...{',
               );

    }//end getPatterns()


}//end class

?>