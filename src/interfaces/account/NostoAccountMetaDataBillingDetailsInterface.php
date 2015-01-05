<?php

/**
 * Interface for account billing details.
 * This is used by the NostoAccountMetaDataInterface meta data model when creating new Nosto accounts.
 */
interface NostoAccountMetaDataBillingDetailsInterface
{
	/**
	 * The 3-letter ISO code (ISO 3166-1 alpha-3) for the country used in account's billing details.
	 *
	 * @return string the country ISO code.
	 */
	public function getCountry();
}