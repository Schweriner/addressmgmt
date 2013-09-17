<?php
namespace Undkonsorten\People\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Felix Althaus <felix.althaus@undkonsorten.com>, undkonsorten
 *  Eike Starkmann <eike.starkmann@undkonsorten.com>, undkonsorten
 *  
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 *
 *
 * @package people
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class Person extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * firstName
	 *
	 * @var \string
	 */
	protected $firstName;

	/**
	 * lastName
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $lastName;

	/**
	 * gender
	 *
	 * @var \integer
	 */
	protected $gender;

	/**
	 * title
	 *
	 * @var \string
	 */
	protected $title;

	/**
	 * organization
	 *
	 * @var \string
	 */
	protected $organization;

	/**
	 * department
	 *
	 * @var \string
	 */
	protected $department;

	/**
	 * street
	 *
	 * @var \string
	 */
	protected $street;

	/**
	 * streetNumber
	 *
	 * @var \string
	 */
	protected $streetNumber;

	/**
	 * addressSupplement
	 *
	 * @var \string
	 */
	protected $addressSupplement;

	/**
	 * city
	 *
	 * @var \string
	 */
	protected $city;

	/**
	 * zip
	 *
	 * @var \string
	 */
	protected $zip;

	/**
	 * country
	 *
	 * @var \string
	 */
	protected $country;

	/**
	 * state
	 *
	 * @var \string
	 */
	protected $state;

	/**
	 * closestCity
	 *
	 * @var \string
	 */
	protected $closestCity;

	/**
	 * email
	 *
	 * @var \string
	 */
	protected $email;

	/**
	 * phone
	 *
	 * @var \string
	 */
	protected $phone;

	/**
	 * mobile
	 *
	 * @var \string
	 */
	protected $mobile;

	/**
	 * fax
	 *
	 * @var \string
	 */
	protected $fax;

	/**
	 * www
	 *
	 * @var \string
	 */
	protected $www;

	/**
	 * description
	 *
	 * @var \string
	 */
	protected $description;

	/**
	 * image
	 *
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $image;

	/**
	 * latitude
	 *
	 * @var \string
	 */
	protected $latitude;

	/**
	 * longitude
	 *
	 * @var \string
	 */
	protected $longitude;

	/**
	 * feUser
	 *
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FrontendUser
	 */
	protected $feUser;

	/**
	 * socialIdentifiers
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Undkonsorten\People\Domain\Model\SocialIdentifier>
	 * @lazy
	 */
	protected $socialIdentifiers;

	/**
	 * __construct
	 *
	 * @return Person
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all ObjectStorage properties.
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		/**
		 * Do not modify this method!
		 * It will be rewritten on each save in the extension builder
		 * You may modify the constructor of this class instead
		 */
		$this->socialIdentifiers = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the firstName
	 *
	 * @return \string $firstName
	 */
	public function getFirstName() {
		return $this->firstName;
	}

	/**
	 * Sets the firstName
	 *
	 * @param \string $firstName
	 * @return void
	 */
	public function setFirstName($firstName) {
		$this->firstName = $firstName;
	}

	/**
	 * Returns the lastName
	 *
	 * @return \string $lastName
	 */
	public function getLastName() {
		return $this->lastName;
	}

	/**
	 * Sets the lastName
	 *
	 * @param \string $lastName
	 * @return void
	 */
	public function setLastName($lastName) {
		$this->lastName = $lastName;
	}

	/**
	 * Returns the gender
	 *
	 * @return \integer $gender
	 */
	public function getGender() {
		return $this->gender;
	}

	/**
	 * Sets the gender
	 *
	 * @param \integer $gender
	 * @return void
	 */
	public function setGender($gender) {
		$this->gender = $gender;
	}

	/**
	 * Returns the title
	 *
	 * @return \string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 *
	 * @param \string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Returns the organization
	 *
	 * @return \string $organization
	 */
	public function getOrganization() {
		return $this->organization;
	}

	/**
	 * Sets the organization
	 *
	 * @param \string $organization
	 * @return void
	 */
	public function setOrganization($organization) {
		$this->organization = $organization;
	}

	/**
	 * Returns the department
	 *
	 * @return \string $department
	 */
	public function getDepartment() {
		return $this->department;
	}

	/**
	 * Sets the department
	 *
	 * @param \string $department
	 * @return void
	 */
	public function setDepartment($department) {
		$this->department = $department;
	}

	/**
	 * Returns the street
	 *
	 * @return \string $street
	 */
	public function getStreet() {
		return $this->street;
	}

	/**
	 * Sets the street
	 *
	 * @param \string $street
	 * @return void
	 */
	public function setStreet($street) {
		$this->street = $street;
	}

	/**
	 * Returns the streetNumber
	 *
	 * @return \string $streetNumber
	 */
	public function getStreetNumber() {
		return $this->streetNumber;
	}

	/**
	 * Sets the streetNumber
	 *
	 * @param \string $streetNumber
	 * @return void
	 */
	public function setStreetNumber($streetNumber) {
		$this->streetNumber = $streetNumber;
	}

	/**
	 * Returns the addressSupplement
	 *
	 * @return \string $addressSupplement
	 */
	public function getAddressSupplement() {
		return $this->addressSupplement;
	}

	/**
	 * Sets the addressSupplement
	 *
	 * @param \string $addressSupplement
	 * @return void
	 */
	public function setAddressSupplement($addressSupplement) {
		$this->addressSupplement = $addressSupplement;
	}

	/**
	 * Returns the city
	 *
	 * @return \string $city
	 */
	public function getCity() {
		return $this->city;
	}

	/**
	 * Sets the city
	 *
	 * @param \string $city
	 * @return void
	 */
	public function setCity($city) {
		$this->city = $city;
	}

	/**
	 * Returns the zip
	 *
	 * @return \string $zip
	 */
	public function getZip() {
		return $this->zip;
	}

	/**
	 * Sets the zip
	 *
	 * @param \string $zip
	 * @return void
	 */
	public function setZip($zip) {
		$this->zip = $zip;
	}

	/**
	 * Returns the country
	 *
	 * @return \string $country
	 */
	public function getCountry() {
		return $this->country;
	}

	/**
	 * Sets the country
	 *
	 * @param \string $country
	 * @return void
	 */
	public function setCountry($country) {
		$this->country = $country;
	}

	/**
	 * Returns the state
	 *
	 * @return \string $state
	 */
	public function getState() {
		return $this->state;
	}

	/**
	 * Sets the state
	 *
	 * @param \string $state
	 * @return void
	 */
	public function setState($state) {
		$this->state = $state;
	}

	/**
	 * Returns the closestCity
	 *
	 * @return \string $closestCity
	 */
	public function getClosestCity() {
		return $this->closestCity;
	}

	/**
	 * Sets the closestCity
	 *
	 * @param \string $closestCity
	 * @return void
	 */
	public function setClosestCity($closestCity) {
		$this->closestCity = $closestCity;
	}

	/**
	 * Returns the email
	 *
	 * @return \string $email
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * Sets the email
	 *
	 * @param \string $email
	 * @return void
	 */
	public function setEmail($email) {
		$this->email = $email;
	}

	/**
	 * Returns the phone
	 *
	 * @return \string $phone
	 */
	public function getPhone() {
		return $this->phone;
	}

	/**
	 * Sets the phone
	 *
	 * @param \string $phone
	 * @return void
	 */
	public function setPhone($phone) {
		$this->phone = $phone;
	}

	/**
	 * Returns the mobile
	 *
	 * @return \string $mobile
	 */
	public function getMobile() {
		return $this->mobile;
	}

	/**
	 * Sets the mobile
	 *
	 * @param \string $mobile
	 * @return void
	 */
	public function setMobile($mobile) {
		$this->mobile = $mobile;
	}

	/**
	 * Returns the fax
	 *
	 * @return \string $fax
	 */
	public function getFax() {
		return $this->fax;
	}

	/**
	 * Sets the fax
	 *
	 * @param \string $fax
	 * @return void
	 */
	public function setFax($fax) {
		$this->fax = $fax;
	}

	/**
	 * Returns the www
	 *
	 * @return \string $www
	 */
	public function getWww() {
		return $this->www;
	}

	/**
	 * Sets the www
	 *
	 * @param \string $www
	 * @return void
	 */
	public function setWww($www) {
		$this->www = $www;
	}

	/**
	 * Returns the description
	 *
	 * @return \string $description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets the description
	 *
	 * @param \string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Returns the image
	 *
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
	 */
	public function getImage() {
		return $this->image;
	}

	/**
	 * Sets the image
	 *
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
	 * @return void
	 */
	public function setImage($image) {
		$this->image = $image;
	}

	/**
	 * Returns the latitude
	 *
	 * @return \string $latitude
	 */
	public function getLatitude() {
		return $this->latitude;
	}

	/**
	 * Sets the latitude
	 *
	 * @param \string $latitude
	 * @return void
	 */
	public function setLatitude($latitude) {
		$this->latitude = $latitude;
	}

	/**
	 * Returns the longitude
	 *
	 * @return \string $longitude
	 */
	public function getLongitude() {
		return $this->longitude;
	}

	/**
	 * Sets the longitude
	 *
	 * @param \string $longitude
	 * @return void
	 */
	public function setLongitude($longitude) {
		$this->longitude = $longitude;
	}

	/**
	 * Returns the feUser
	 *
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FrontendUser $feUser
	 */
	public function getFeUser() {
		return $this->feUser;
	}

	/**
	 * Sets the feUser
	 *
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FrontendUser $feUser
	 * @return void
	 */
	public function setFeUser(\TYPO3\CMS\Extbase\Domain\Model\FrontendUser $feUser) {
		$this->feUser = $feUser;
	}

	/**
	 * Adds a SocialIdentifier
	 *
	 * @param \Undkonsorten\People\Domain\Model\SocialIdentifier $socialIdentifier
	 * @return void
	 */
	public function addSocialIdentifier(\Undkonsorten\People\Domain\Model\SocialIdentifier $socialIdentifier) {
		$this->socialIdentifiers->attach($socialIdentifier);
	}

	/**
	 * Removes a SocialIdentifier
	 *
	 * @param \Undkonsorten\People\Domain\Model\SocialIdentifier $socialIdentifierToRemove The SocialIdentifier to be removed
	 * @return void
	 */
	public function removeSocialIdentifier(\Undkonsorten\People\Domain\Model\SocialIdentifier $socialIdentifierToRemove) {
		$this->socialIdentifiers->detach($socialIdentifierToRemove);
	}

	/**
	 * Returns the socialIdentifiers
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Undkonsorten\People\Domain\Model\SocialIdentifier> $socialIdentifiers
	 */
	public function getSocialIdentifiers() {
		return $this->socialIdentifiers;
	}

	/**
	 * Sets the socialIdentifiers
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Undkonsorten\People\Domain\Model\SocialIdentifier> $socialIdentifiers
	 * @return void
	 */
	public function setSocialIdentifiers(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $socialIdentifiers) {
		$this->socialIdentifiers = $socialIdentifiers;
	}

}
?>