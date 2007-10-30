<?php
/**
 * File containing the ezcFeedAtLeastOneItemDataRequiredException class.
 *
 * @package Feed
 * @version //autogentag//
 * @copyright Copyright (C) 2005-2007 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @filesource
 */

/**
 * Thrown when at least one of the required attributes is missing for a feed
 * item.
 *
 * @package Feed
 * @version //autogentag//
 */
class ezcFeedAtLeastOneItemDataRequiredException extends ezcFeedException
{
    /**
     * Constructs a new ezcFeedAtLeastOneItemDataRequiredException.
     *
     * @param array(string) $attributes The attributes of which at least one is required
     */
    public function __construct( $attributes )
    {
        $attributes = implode( ', ', $attributes );
        parent::__construct( "At least one of these attributes is required: {$attributes}." );
    }
}
?>