<?php

namespace Pronamic\WordPress\Pay\Extensions\EasyDigitalDownloads;

/**
 * Title: Easy Digital Downloads
 * Description:
 * Copyright: Copyright (c) 2005 - 2018
 * Company: Pronamic
 *
 * @author  Remco Tolsma
 * @version 2.0.0
 * @since   1.0.0
 */
class EasyDigitalDownloads {
	/**
	 * Order status pending
	 *
	 * @var string
	 */
	const ORDER_STATUS_PENDING = 'pending';

	/**
	 * Order status completed
	 *
	 * @var string
	 */
	const ORDER_STATUS_PUBLISH = 'publish';

	/**
	 * Order status refunded
	 *
	 * @var string
	 */
	const ORDER_STATUS_REFUNDED = 'refunded';

	/**
	 * Order status failed
	 *
	 * @var string
	 */
	const ORDER_STATUS_FAILED = 'failed';

	/**
	 * Order status abandoned
	 *
	 * @var string
	 */
	const ORDER_STATUS_ABANDONED = 'abandoned';

	/**
	 * Order status revoked/cancelled
	 *
	 * @var string
	 */
	const ORDER_STATUS_REVOKED = 'revoked';

	/**
	 * Check if Easy Digital Downloads is active
	 *
	 * @return boolean
	 */
	public static function is_active() {
		return defined( 'EDD_VERSION' );
	}
}
