This module integrates a Magento 2 based webstore with the **[Ginger Payments](https://www.gingerpayments.com)** payment service (the Netherlands).  
It [supports](https://mage2.pro/t/3463) iDEAL (the Netherlands), Bancontact (Belgium), SOFORT (Germany), bank cards, bank transfers.  
The module is **free** and **open source**.

## Demo videos
1. [Capture an **iDEAL** payment](https://mage2.pro/t/3570).
2. [Capture a **bank transfer** payment](https://mage2.pro/t/3571).

## Screenshots
### 1. The frontend checkout screen
![](https://mage2.pro/uploads/default/original/2X/d/d29761e2bc8676b4af87014dba7fc1f5bdf334fb.png)

### 2. The frontend «checkout success» screen for a bank transfer payment
![](https://mage2.pro/uploads/default/original/2X/8/802d1315ca1cff505e783fd7c8225adffc3d9976.png)

### 3. The «Order Information» → «Payment Method» block on the frontend order page for a bank transfer payment
![](https://mage2.pro/uploads/default/original/2X/9/9b7409c651886506a9aeb1003c001d6a49cc2d1f.png)

### 4. The «Order Information» → «Payment Method» block on the frontend order page for an iDEAL payment
![](https://mage2.pro/uploads/default/original/2X/b/b0fa52a53e488ddf4049f2ad88b1f9376699dd5c.png)

### 5. The «Payment Method» block on the backend order page for an iDEAL payment
![](https://mage2.pro/uploads/default/original/2X/b/b8377c74e12a159997b6f6f79fbaaee2404b33d1.png)

### 6. The backend settings
![](https://mage2.pro/uploads/default/original/2X/2/23bd3052c03dfee68f7251f0d75a6455561879b3.png)

## How to install
[Hire me in Upwork](https://www.upwork.com/fl/mage2pro), and I will: 
- install and configure the module properly on your website
- answer your questions
- solve compatiblity problems with third-party checkout, shipping, marketing modules
- implement new features you need 

### 2. Self-installation
```
bin/magento maintenance:enable
rm -f composer.lock
composer clear-cache
composer require mage2pro/ginger-payments:*
bin/magento setup:upgrade
bin/magento cache:enable
rm -rf var/di var/generation generated/code
bin/magento setup:di:compile
rm -rf pub/static/*
bin/magento setup:static-content:deploy -f en_US <additional locales>
bin/magento maintenance:disable
```

## How to update
```
bin/magento maintenance:enable
composer remove mage2pro/ginger-payments
rm -f composer.lock
composer clear-cache
composer require mage2pro/ginger-payments:*
bin/magento setup:upgrade
bin/magento cache:enable
rm -rf var/di var/generation generated/code
bin/magento setup:di:compile
rm -rf pub/static/*
bin/magento setup:static-content:deploy -f en_US <additional locales>
bin/magento maintenance:disable
```