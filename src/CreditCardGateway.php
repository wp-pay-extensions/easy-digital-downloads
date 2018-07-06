<?php

namespace Pronamic\WordPress\Pay\Extensions\EasyDigitalDownloads;

/**
 * Title: Easy Digital Downloads Credit Card gateway
 * Description:
 * Copyright: Copyright (c) 2005 - 2018
 * Company: Pronamic
 *
 * @author  Remco Tolsma
 * @version 2.0.1
 * @since   1.1.0
 */
class CreditCardGateway extends Gateway {
	/**
	 * Construct and initialize Credit Card gateway
	 */
	public function __construct() {
		parent::__construct( array(
			'id'             => 'pronamic_pay_credit_card',
			'admin_label'    => __( 'Pronamic - Credit Card', 'pronamic_ideal' ),
			'checkout_label' => __( 'Credit Card', 'pronamic_ideal' ),
			'payment_method' => \Pronamic\WordPress\Pay\Core\PaymentMethods::CREDIT_CARD,
		) );
	}
}
