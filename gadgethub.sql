-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2019 at 02:54 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gadgethub`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `customer_acc_id` int(12) NOT NULL,
  `tbl_username` varchar(100) NOT NULL,
  `customer_first_name` varchar(100) NOT NULL,
  `customer_last_name` varchar(100) NOT NULL,
  `customer_email` varchar(200) NOT NULL,
  `password` varchar(15) NOT NULL,
  `confirm_pasword` varchar(15) NOT NULL,
  `date_joined` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `prod_id` int(12) NOT NULL,
  `productName` varchar(250) NOT NULL,
  `productCategory` varchar(250) NOT NULL,
  `shortProductDesc` text NOT NULL,
  `fullProductDesc` longtext NOT NULL,
  `productPrice` float NOT NULL,
  `productImage` varchar(250) NOT NULL,
  `dateAdded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`prod_id`, `productName`, `productCategory`, `shortProductDesc`, `fullProductDesc`, `productPrice`, `productImage`, `dateAdded`) VALUES
(1, 'Acer Travelmate 11.6', '1', 'Acer Travelmate 11.6-Inch Laptop Intel Celeron N3050 1.60GHz Processor 2GB RAM 32GB SSD Intel HD Graphics Windows 10 Pro', '<p>The TravelMate B from Acer is a 3.1lb compact notebook that features an \r\nIntel Celeron N3050 dual-core processor, 2GB of RAM, and 11.6\" display \r\nto run every day basic tasks, such as word processing, emailing, and \r\nmore. The Intel Celeron N3050 processor operates between 1.6 GHz and \r\n2.16 GHz speeds and provides an integrated Intel HD Graphics chip-set, \r\nwhich delivers detailed visuals to the 11.6\" display. For storage, it \r\ncomes equipped with a 32GB flash storage drive as well as a card reader \r\nslot that can accept an optional SD memory card. Windows 10 Pro is \r\npreinstalled on the 32GB drive. The 11.6\" display has a native \r\nresolution of 1366 x 768. You can expand the notebook\'s onscreen display\r\n to a monitor via its HDMI port. Other notable connections include a USB\r\n 2.0 port and USB 3.0 port for connecting printers and external storage \r\ndrives. To access the Internet, an 802.11ac Wi-Fi module is on board. \r\nOnce connected online, you can conduct face-to-face conversations using \r\nthe notebook\'s webcam, microphone, and pair of speakers. Bluetooth is \r\nalso available for wireless connections to headsets and external \r\nspeakers.<br></p>', 85800, 'file12.png', '2019-02-27'),
(2, 'Lenovo Legion Y520', '1', 'Lenovo Legion Y520 15.6-Inch Gaming Laptop Intel Core i7-7700HQ 2.8GHz Processor 16GB RAM 2TB + 256GB SSD NVIDIA GeForce Graphics Windows 10 Home', '<p><b><span style=\"font-size: 18px;\">The latest in gaming performance<br></span></b>Featuring the latest generation of processors, the Y520 sports up to a\r\n 7th Gen Intel® Core i7 CPU. With a 12-percent increase in productivity \r\ncompared to previous processors and a 19-percent increase in web \r\nperformance via a dedicated media engine, you can enjoy the latest in \r\ngaming performance and online gameplay.\r\n</p><div class=\"features-section _\"><div class=\"tabbedBrowse-features-textWrapper left\">\r\n</div>\r\n</div><div class=\"features-section _\">\r\n<div class=\"tabbedBrowse-features-textWrapper fullwidth\"><b><span style=\"font-size: 18px;\">Next-generation graphics</span></b>\r\n<div class=\"tabbedBrowse-features-featureText\">\r\n<p>The Y520 comes with NVIDIA® GeForce® GTX 1050/1050GTi or AMD Radeon™ \r\nRX 560 graphics, which allow you to play games smoothly and with capable\r\n frame rates. So escort the payload in a first-person shooter knowing \r\nthis gaming laptop delivers all the performance you need.</p>\r\n</div>\r\n</div>\r\n</div><p>\r\n<b><span style=\"font-size: 18px;\">Super fast speed and storage</span></b></p><p>The Y520 comes with up to 512GB of PCIe SSD storage, ideal for \r\nreducing boot-up time and in-game loading, or 2TB of HDD storage, \r\nperfect for storing your entire gaming collection. Or you can opt for \r\nhybrid storage, effectively getting the best of both worlds.</p><div class=\"features-section _\">\r\n<div class=\"tabbedBrowse-features-textWrapper right\"><b><span style=\"font-size: 18px;\"><span style=\"font-size: 18px;\">Harman Audio with Dolby Premium</span></span></b><span style=\"font-size: 18px;\">?</span><b><span style=\"font-size: 18px;\">\r\n</span></b><div class=\"tabbedBrowse-features-featureText\">\r\n<p>With or without gaming headphones, the Legion Y520 has you covered \r\nwith 2x 2W Harman speakers with Dolby Audio Premium. Dolby Audio Premium\r\n is custom-tuned to deliver premium-quality audio for all content, for \r\ntruly immersive game-play.</p>\r\n</div>\r\n</div>\r\n<div class=\"tabbedBrowse-features-mediaItem left\"><figure><img class=\"lazy lazyLoadAfterDOMInteractive\" style=\"display: inline;\" title=\"\" src=\"https://www.lenovo.com/medias/lenovo-laptop-legion-y520-15-feature-2.png?context=bWFzdGVyfGltYWdlc3wxMDM4Mjh8aW1hZ2UvcG5nfGltYWdlcy9oOWYvaDhlLzkzNTk2OTk3NzE0MjIucG5nfGY3MjVmNTFmMDZkZjZjNWY1NzEwNjhkMDZiODMwM2NmNGI0Mjg5YWY5YTY4OGVlMzZmNThjNzQ4ZjRhMjRlMTE&amp;w=1920\" alt=\"Lenovo Legion Y520 Speaker Detail\" width=\"238\" height=\"160\"><figcaption>\r\n\r\n</figcaption></figure></div>\r\n</div><p>\r\n</p><p><b><span style=\"font-size: 18px;\">Customize and record with Lenovo Nerve Sense</span></b><span style=\"font-size: 10px;\"><br></span></p><p>Easily customize your settings, such as audio, active keys, cooling, \r\nand network priority – so you can focus on the game. Then, once you’re \r\nin the zone, record your highlights for replaying or uploading to \r\nstreaming sites. Lenovo Nerve Sense makes it effortless.\r\n</p><div class=\"features-section _\"><div class=\"tabbedBrowse-features-textWrapper left\">\r\n</div>\r\n<div class=\"tabbedBrowse-features-mediaItem right\"><figure><img class=\"lazy lazyLoadAfterDOMInteractive\" style=\"display: inline;\" title=\"\" src=\"https://www.lenovo.com/medias/lenovo-laptop-legion-y520-15-feature-3.png?context=bWFzdGVyfGltYWdlc3w0OTc3OHxpbWFnZS9wbmd8aW1hZ2VzL2g0MC9oMDAvOTM1OTY5OTgzNjk1OC5wbmd8NDU2OTdlZGM4NDkzZWU3M2I1OThkNDBjYWQwM2EwNDRmZGYzOTBhMzZlNDhkMjM4NTUyNGZlMjZmZjI3ZDkwMg&amp;w=1920\" alt=\"Lenovo Legion Y520 Display Featuring Lenovo Nerve Center Dashboard\" width=\"174\" height=\"120\"><figcaption></figcaption></figure></div>\r\n</div><p>\r\n</p><p><b><span style=\"font-size: 18px;\">Shine on with optional red-backlit keyboard</span></b></p><p>The Y520 features an optional red-backlit keyboard, perfect for those\r\n late-night gaming sessions. This brilliantly crimson backlit keyboard \r\nfeatures keys with 1.7mm of key travel distance, delivering crisp, \r\naccurate and responsive keystrokes perfect for in-game chatting and game-play.\r\n</p><div class=\"features-section _\"><div class=\"tabbedBrowse-features-textWrapper fullwidth\">\r\n</div>\r\n</div><p>\r\n<b><span style=\"font-size: 18px;\">Portable design</span></b></p><p>At a mere 25.8 mm thick and only 2.5 kg in weight, wrapped in a \r\nsmudge-resistant body, this gaming laptop goes wherever you do. So just \r\ntoss the Y520 in your bag and enjoy powerful mobile gaming no matter \r\nwhere you go.</p><div class=\"features-section _\"><div class=\"tabbedBrowse-features-textWrapper fullwidth\"><div class=\"tabbedBrowse-features-featureText\">\r\n</div>\r\n</div>\r\n</div><p>\r\n<b><span style=\"font-size: 18px;\">Thermal engineering</span></b><b><span style=\"font-size: 18px;\"><br></span></b>The Y520 was designed to fight heat with strategically engineered \r\nfans and vents. Located close to the graphics card and processors, this \r\nfan system keeps hot air moving while rear-placed thermal vents remove \r\nthat heat. Furthermore, you can use the Extreme Cooling shortcut within \r\nLenovo Nerve Sense for gaming firefights that require an additional push\r\n of cooling.<b><span style=\"font-size: 18px;\"></span></b>\r\n</p><div class=\"tabbedBrowse-features-textWrapper left\">\r\n</div>', 480000, 'file13.png', '2019-02-27'),
(3, 'Dell Latitude E7470', '1', 'Dell Latitude E7470 14-Inch Note Book Laptop Intel Core i5-6300U 2.5GHz Processor 4GB RAM 128GB SSD Intel HD Graphics Windows 7/10 Pro', '<div class=\"ov-wrapper js-overview-desc\">\r\n<div class=\"ov-desc\">\r\n<p>The&nbsp;<span>14 Inch E7470 Latitude 14 7000 Series Ultrabook</span>&nbsp;from&nbsp;<span>Dell</span>&nbsp;is\r\n a business-class laptop built with security in mind. It\'s powered by a \r\n2.5 GHz Intel Core i5-6300U Dual-Core processor and 4GB of 2133 MHz \r\nDDR3L RAM that lets you efficiently multitask and quickly access \r\nfrequently used files and programs. Furthermore, 6th generation Skylake \r\nprocessors features vPro technology, which helps increase productivity \r\nand keeps data secure with hardware-enhanced security. If you need more \r\nprocessing power, the CPU\'s core clock can be adjusted to 3.0 GHz with \r\nIntel Turbo Boost technology.</p>\r\n<p>The 14 Inch anti-glare display is driven by integrated Intel HD \r\ngraphics and provides you with a 1366 x 768 Full HD screen resolution. \r\nYou can also connect additional displays via HDMI and Mini DisplayPort. \r\nFor storage, the Latitude E7470 has a 128GB M.2 SATA solid state drive \r\n(SSD). SSDs are constructed without any moving parts and therefore can \r\nendure more, and perform faster than traditional hard drives.</p>\r\n</div>\r\n</div><div class=\"sectionHeaders js-hiddenFeatures\" data-selenium=\"sectionHeaders\"><dl class=\"js-featureSectionDL\"><dt class=\"featureTitle\"><strong>Dual-Core 6th-Gen Skylake Performance with vPro</strong></dt><dd class=\"c28\">The\r\n Latitude E7470 houses a 6th generation Skylake Intel Core i5-6300U \r\nprocessor. Its dual cores have a stock speed of 2.5 GHz and can be \r\nadjusted up to 3.0 GHz, thanks to Intel Turbo Boost 2.0 technology. \r\nFurthermore, with Intel Hyper-Threading technology, you\'ll be able to \r\npush the dual cores up to four virtual cores for additional processing \r\npower. Skylake processors also feature vPro, which helps to increase \r\nproductivity while helping keep data secure.</dd></dl><dl class=\"js-featureSectionDL\"><dt class=\"featureTitle\"><strong>Intel 802.11ac Dual-Band Wi-Fi &amp; Bluetooth 4.1</strong></dt><dd class=\"c28\">Featuring\r\n Intel 802.11ac Dual-Band Wi-Fi, the Latitude E7470 delivers high \r\nperformance, broader coverage, and longer battery life. It also comes \r\nwith Bluetooth 4.1 technology so you\'ll be able to wirelessly pair \r\nBluetooth-compatible peripherals and accessories.</dd></dl><dl class=\"js-featureSectionDL\"><dt class=\"featureTitle\"><strong>SD Card Reader &amp; SIM Card Slot</strong></dt><dd class=\"c28\">With\r\n the SD 4.0 memory card reader, you can expand your system\'s memory as \r\nwell as transfer files between mobile devices. This card reader supports\r\n SD, SDHC, and SDXC memory cards. The Latitude E7470 also has a SIM card\r\n slot.</dd></dl><dl class=\"js-featureSectionDL\"><dt class=\"featureTitle\"><strong>Solid State Drive</strong></dt><dd class=\"c28\">Get\r\n quicker boot times, faster application launches, and overall enhanced \r\nperformance with the 128GB solid state drive in the Latitude E7470. And \r\nbecause solid state drive technology does not use moving parts, you get a\r\n more durable storage solution less prone to physical damage or \r\nmechanical failure.</dd></dl></div>', 290000, 'file21.png', '2019-02-27'),
(4, 'HP Pavilion 23cw 23-in IPS LED Backlit Monitor', '1', 'HP Pavilion 23cw 23-in IPS LED Backlit Monitor', '<p><span>Play games, watch movies and more with this HP Pavilion 23cw 23 \r\nInch LED monitor, which features 1920 x 1080 resolution and IPS \r\ntechnology for clear visuals from a wide variety of vantage points. \r\nEnhance+ uses noise reduction to improve image quality.</span><br></p>', 97000, 'file31.png', '2019-02-27'),
(5, 'HP Z30i 30-Inch LED IPS Monitor', '1', 'HP Z30i 30-Inch LED IPS Monitor', '<p>The black <b>Z Display Promo Z30i 30\" Widescreen LED Backlit IPS Monitor</b> from <b>HP</b>\r\n provides image accuracy, adjustability, and reliability optimized for \r\ncommercial environments. The monitor delivers power savings over \r\nfirst-generation IPS technology. This monitor offers a screen resolution\r\n of up to 2560 x 1600, 178° (H) / 178° (V) viewing angles, 1000:1 static\r\n and 5000000:1 dynamic contrast ratios, an 8 ms response time, as well \r\nas 350 cd/m<sup>2</sup> of brightness. Connect devices with DisplayPort,\r\n DVI, VGA, and HDMI inputs, as well as through an integrated USB hub. \r\nThe monitor also comes with eco-friendly features such as arsenic-free \r\ndisplay glass, mercury-free LED backlights, and a low halogen design. It\r\n is ENERGY STAR, EPEAT Gold, and TCO certified.</p><p>\r\n\r\n\r\n<dl class=\"js-featureSectionDL\" data-tickertarget=\"ov-ft-2\"><dt class=\"featureTitle\">Power-Smart IPS Gen 2 Backlights</dt><dd class=\"c28\">This\r\n LED backlit IPS monitor lowers power consumption* and provides 100% \r\ncoverage of the sRGB color space and 99% coverage of the Adobe RGB color\r\n space. Extra-wide 178° (H) / 178° (V) viewing angles give everyone the \r\nsame view. See details on a diagonal display with narrow bezels and a \r\nresolution of up to 2560 x 1600. Experience clear presentations from \r\nfrom the monitor\'s 350 cd/m<sup>2</sup> brightness, 1000:1 static and \r\n5000000:1 dynamic contrast ratios, and 8 ms response time. Enhance the \r\ndark regions of your onscreen images and see the smallest details even \r\nbetter with the integrated Black Stretch technology.</dd></dl></p><p><dl class=\"js-featureSectionDL\" data-tickertarget=\"ov-ft-7\"><dt class=\"featureTitle\">Customize Your Workspace</dt><dd class=\"c28\">Customize\r\n your workspace with resizable screen partitions. Work in documents, \r\nspreadsheets, and email in separate regions of the screen at the same \r\ntime with the HP Display Assistant software. View open applications on \r\nall of your connected displays with the expanded toolbar. Help deter \r\ntheft with a user-designated PIN that deactivates the monitor if it is \r\ndisconnected from a PC without approval.</dd></dl><dl class=\"js-featureSectionDL\" data-tickertarget=\"ov-ft-6\"><dt class=\"featureTitle\">Minimal Environmental Impact</dt><dd class=\"c28\">This\r\n monitor helps to reduce power consumption and costs with an \r\nenergy-efficient design and is ENERGY STAR and EPEAT Gold certified. The\r\n display includes mercury-free backlights, a low halogen design*, and \r\narsenic-free glass. <span class=\"openButton\" data-selenium=\"featureOpenButton\"><sup>2</sup> </span></dd></dl><dl class=\"js-featureSectionDL\" data-tickertarget=\"ov-ft-5\"><dt class=\"featureTitle\">Integrated Cable Management Clip</dt><dd class=\"c28\">Get\r\n organized with the integrated cable management clip. Create a clean, \r\ncompact, all-in-one with the optional HP Thin Client Mount Kit (Thin \r\nClient sold separately).</dd></dl><dl class=\"js-featureSectionDL\" data-tickertarget=\"ov-ft-4\"><dt class=\"featureTitle\">Connectivity</dt><dd class=\"c28\">This\r\n monitor provides connectivity from a range of inputs that include \r\nDisplayPort, DVI-D, VGA, HDMI, audio output for an HP Speaker Bar (sold \r\nseparately), and an integrated USB hub.</dd></dl><dl class=\"js-featureSectionDL\" data-tickertarget=\"ov-ft-3\"><dt class=\"featureTitle\">Design</dt><dd class=\"c28\">This monitor features a 4-way adjustable stand and an integrated HP QR2 Quick Release than enables VESA mounting.</dd></dl></p>', 270000, 'file41.png', '2019-02-27'),
(6, 'Lenovo V320-15IAP Mini Tower Desktop Computer', '1', 'Lenovo V320-15IAP Mini Tower Desktop Computer Plus 21.5-Inch Monitor Intel Pentium J4205 1.5GHz Processor 4GB RAM 500GB HDD Intel HD Graphics FreeDOS', '<p><span style=\"font-size: 14px;\">The\r\n V320 tower desktop provides incredible value for your small business. \r\nThis entry-level PC features the latest technology and enhanced security\r\n to keep you in control. Plus, the V320 is simple to manage and keep \r\nsystem health optimized—so you can focus on the important stuff like \r\nrunning your business.</span></p><p><span style=\"font-size: 14px;\"><br></span><b><span style=\"font-size: 14px;\">Smaller size, bigger statement<br></span></b><span style=\"font-size: 14px;\">The</span><span style=\"font-size: 14px;\"> V320 desktop comes in a 15L chassis, which is 25% smaller than \r\ntraditional tower desktops, but still share the same storage as the \r\ntraditional ones. That means a space-saving system that frees up \r\nvaluable workspace on your desk.</span></p><div class=\"tabbedBrowse-features-textWrapper left\"><span style=\"font-size: 14px;\"><br></span><b><span style=\"font-size: 14px;\">A companion by any other name</span></b><span style=\"font-size: 14px;\"></span><span style=\"font-size: 14px;\">\r\n</span><span style=\"font-size: 14px;\"></span><div class=\"tabbedBrowse-features-featureText\"><div class=\"tabbedBrowse-features-textWrapper right\"><div class=\"tabbedBrowse-features-featureText\"><span style=\"font-size: 14px;\"></span><span style=\"font-size: 14px;\">The V320 desktop includes the Lenovo Companion app, your one-stop \r\nguide to maximizing system performance. This app ensures that your PC \r\nremains current on critical updates, while also providing key system \r\ninformation like serial number, user guides, and warranty details in one\r\n convenient location. What’s more, the Lenovo Companion offers insight \r\nand advice from Lenovo experts via tutorials, articles, and the latest \r\ntech news.</span><span style=\"font-size: 14px;\"></span><span style=\"font-size: 14px;\"></span></div><div class=\"tabbedBrowse-features-featureText\"><span style=\"font-size: 14px;\"><br></span><b><span style=\"font-size: 14px;\">Exceptional performance</span></b><span style=\"font-size: 14px;\"></span><span style=\"font-size: 14px;\">\r\n</span><span style=\"font-size: 14px;\"></span><div class=\"tabbedBrowse-features-textWrapper right\"><div class=\"tabbedBrowse-features-featureText\"><span style=\"font-size: 14px;\">\r\n</span><p><span style=\"font-size: 14px;\">The V320 tower features the latest Intel® Pentium® processors, which \r\ndeliver performance that’s 25% faster than the previous generation. So \r\nwhether you’re creating documents, sharing a presentation, researching \r\ndata, or kicking back with an HD video, you’re sure to make the most out\r\n of your time.</span></p><p><span style=\"font-size: 14px;\"><br></span><b><span style=\"font-size: 14px;\">Prevent data leaks</span></b><span style=\"font-size: 14px;\"></span><span style=\"font-size: 14px;\">\r\n</span></p><div class=\"tabbedBrowse-features-textWrapper right\"><div class=\"tabbedBrowse-features-featureText\"><span style=\"font-size: 14px;\">\r\n</span><p><span style=\"font-size: 14px;\">Restrict port access, while still allowing use of keyboard and mouse.\r\n With Smart USB Protection, you can prevent sensitive data from leaking \r\nand ensure that nothing malicious enters your system through ports.</span></p><span style=\"font-size: 14px;\">\r\n</span></div><span style=\"font-size: 14px;\">\r\n</span></div><span style=\"font-size: 14px;\">\r\n</span></div><span style=\"font-size: 14px;\">\r\n</span></div><span style=\"font-size: 14px;\">\r\n</span></div><span style=\"font-size: 14px;\">\r\n</span></div><span style=\"font-size: 14px;\">\r\n</span></div><span style=\"font-size: 14px;\">\r\n</span></div>', 130000, 'file51.png', '2019-02-27'),
(7, 'HP ProDesk 600 G3 Small Form Factor Desktop Computer', '1', 'HP ProDesk 600 G3 Small Form Factor Desktop Computer Intel Core i3-7100 3.9GHz Processor 4GB RAM 500GB HDD Intel HD Graphics Windows 10 Pro 1HK84EA', '<p><dl><dd>Powered for business, the HP ProDesk 600 SFF is a highly \r\nexpandable PC featuring flexible connectivity options, strong security, \r\nand comprehensive manageability features in a stylishly redesigned \r\nchassis for the modern workplace.</dd></dl>\r\n</p><div>\r\n<p><b>Expansion that extends your investment</b></p>\r\n</div><p>\r\n<dl><dd>\r\n<p>The full value of your investment comes with expansion that extends \r\nthe life of your PC. The HP ProDesk 600 SFF has two bays, two slots, two\r\n M.2 connectors, and configurable video ports in addition to legacy \r\nports.</p>\r\n</dd></dl>\r\n</p><div>\r\n<p><b>HP exclusive security and manageability</b></p>\r\n</div><p>\r\n<dl><dd>\r\n<p>Help prevent data breaches and downtime with HP BIOSphere Gen3<span><a class=\"sup_linked sup_ovw\">3</a></span>&nbsp;and simplify management with HP WorkWise<span><a class=\"sup_linked sup_ovw\">4</a></span>, HP’s most advanced smartphone app for PC management.</p>\r\n</dd></dl>\r\n</p><div>\r\n<p><b>Powerful options</b></p>\r\n</div><p>\r\n<dl><dd>\r\n<p>Power through your day with high-performance 7th Gen Intel® Core i3/i5/i7processors<span><a class=\"sup_linked sup_ovw\">2</a></span>&nbsp;unleashed by optional Intel® Optane&nbsp;<span><a class=\"sup_linked sup_ovw\">6</a></span>&nbsp;technology, up to 64 GB of DDR4 memory<span><a class=\"sup_linked sup_ovw\">6</a></span>, and optional graphics cards<span><a class=\"sup_linked sup_ovw\">6</a></span>.</p>\r\n</dd></dl>\r\n</p><div>\r\n<p><b>Connection hub</b></p>\r\n</div><p>\r\n<dl><dd>\r\n<ul><li>With 8 total USB ports, up to three video outputs, and optional Bluetooth&nbsp;<span><a class=\"sup_linked sup_ovw\">6</a></span>connectivity, the HP ProDesk 600 SFF becomes a hub for all your devices in the office.</li></ul>\r\n<ul><li>Let nothing stand in your way ..Power through your day with Windows 10 Pro<a class=\"sup_linked sup_ovw\">1</a>&nbsp;and the powerful HP ProDesk 600 SFF with built-in security, collaboration, and connectivity.</li></ul>\r\n<ul><li>Work without interruption.&nbsp; &nbsp;Keep productivity high and downtime low with HP BIOSphereGen3<a class=\"sup_linked sup_ovw\">3</a>&nbsp;firmware-level automation. Your PCs have extra protection thanks to automatic updates and security checks.</li></ul>\r\n<ul><li>Office Intelligence HP WorkWise<a class=\"sup_linked sup_ovw\">4</a>&nbsp;is\r\n office intelligence rolled into one smartphone app to provide PC \r\nsecurity, real-time PC performance information, and simplified printer \r\ndriver installation for HP PC users.</li></ul>\r\n<ul><li>Speed up the basics of IT management . The HP Manageability Integration Kit<a class=\"sup_linked sup_ovw\">7</a>&nbsp;helps\r\n speed up image creation and management of hardware, BIOS, and security \r\nthrough Microsoft System Center Configuration Manager.</li></ul>\r\n<ul><li>Super secure. Super protected .HP Client Security Suite Gen3<a class=\"sup_linked sup_ovw\">8</a>&nbsp;features HP Multi-Factor Authenticate, HP Device Access Manager<a class=\"sup_linked sup_ovw\">9</a>,\r\n HP SpareKey, and HP Password Manager. These tools work to keep data out\r\n of reach and defend against theft, attacks, and unauthorized users.</li></ul>\r\n<ul><li>Get PC images right the first time. Improve the quality and security \r\nof custom Windows images with HP Image Assistant which assists ITDMs \r\nwith image creation, identifies problems, and provides recommendations \r\nand remediation.</li></ul>\r\n<ul><li>Maximize network performance.&nbsp; Greatly improve the transfer rates of \r\nuser’s data, voice, and video communication when connecting over \r\nchallenged LAN or Wi-Fi networks with HP Velocity.</li></ul>\r\n<ul><li>Built-in durability.&nbsp; Rest easy with a PC that goes the distance and is designed to pass HP Total Test Process.</li></ul>\r\n<ul><li>Easy Audio.&nbsp; Audio connections are easy with the Universal Audio \r\nJacki that supports mic in, headphones, and CTIA headsets with the same \r\nconnector.</li></ul>\r\n</dd></dl><br></p>', 230000, 'file61.png', '2019-02-27'),
(8, 'HP 290 G1 Microtower Desktop Computer', '1', 'HP 290 G1 Microtower Desktop Computer Intel Pentium G4560 3.2GHz Processor 4GB RAM 500GB HDD Intel HD Graphics FreeDOS 1QN92EA With 18.5-Inch Monitor', '<p><b>Reliable</b></p><div>\r\n<div>\r\n<p>The HP 290 G1 MT provides a powerful PC with the features you need to accomplish your everyday tasks.</p>\r\n</div><b>Design\r\n</b><div>\r\n<p>Take up less space with the HP 290 G1 MT that is 27% smaller than the\r\n previous generation with a stylish design that is easy to set up and \r\nuse.</p>\r\n</div><b>Performance\r\n</b><div>\r\n<p>Keep up with daily tasks with strong performance from a 7th Gen \r\nIntel® Core™ i3/i5/i7 processor, DDR4 memory and PCIe x1 and PCIe x16 \r\nslots for future growth.</p>\r\n</div><b>Security\r\n</b><p align=\"left\">Help protect your investment and your data with firmware TPM and a security lock slot</p>\r\n</div>', 165000, 'file71.png', '2019-02-27'),
(9, 'HP Z230 Tower Workstation Computer', '1', 'HP Z230 Tower Workstation Computer Intel Core i5-4590 3.3GHz Processor 4GB RAM 1TB HDD Intel HD Graphics Windows 7 / 8.1 Pro F1M15UT', '<p>The&nbsp;<span>Z230 Series F1M15UT Tower Workstation</span>&nbsp;from&nbsp;<span>HP</span>&nbsp;delivers\r\n powerful performance in a tower form factor and is designed for \r\nprofessionals who require high reliability. With the capabilities to \r\noperate in immersive work environments and handle 24x7x365 workloads, \r\nthe Z230 delivers processor and graphics technologies in a compact yet \r\nexpandable tower.</p><p>This system is powered by a 3.3 GHz Intel Core i5-4590 Quad-Core \r\nprocessor which will allow you to run multiple applications \r\nsimultaneously. If you need more power, the CPU can be overclocked to \r\n3.7 GHz using Intel\'s Turbo Boost technology. The 4GB of 1600 MHz \r\nPC3-12800 DDR3 SDRAM helps to ensure smooth multitasking and also allows\r\n the computer to quickly access frequently-used files and programs. \r\nWhile the current memory configuration is 1 x 4GB, there are four total \r\nmemory slots that will allow the RAM to be upgraded to 32GB, using one \r\n8GB chip in each of the four memory slots.</p><p>For long term storage of your files, a 1TB 7200 rpm SATA hard drive \r\noffers quick access to your data. If you want to add external storage \r\ndrives or other peripherals, the Z230 features 5 x USB 3.0 ports and 9 x\r\n USB 2.0 ports. For users who wish to add additional components to the \r\ndrive bays, the Z230 has a total of six expansion bays - 3 x 5.25\" \r\nexternal bays, 2 x 3.5\" internal bays, and 1 x 2.5\" internal bay. There \r\nare also a total of five PCIe and PCI expansion slots. The integrated \r\nIntel HD Graphics 4600 is designed to deliver a sharp, clear picture \r\nwhile allowing for a wide range of monitors to be used via its dual \r\nDisplayPorts and single DVI port. The Intel HD 4600 graphics controller \r\nalso supports simultaneous use of up to three displays. Whether you are \r\nlistening to music, watching a movie, or playing a game, the integrated \r\nRealtek HD ALC221 outputs high definition audio and delivers higher \r\nfidelity than standard audio controllers.</p><p>Workstation power-hungry but on a PC budget? The HP Z230 Workstation \r\noffers workstation-class productivity with advanced memory, graphics, \r\nand storage, plus application certification and excellent processor.</p><p><b>Affordable performance and flexibility, re-defined</b></p><p>Create a totally immersive work environment for those who demand \r\nreliability and performance on a budget. Designed for heavy 24x7x365 \r\nworkloads, the HP Z230 delivers next-generation processor, graphics \r\ntechnologies and scalability to match your business needs.</p><p><b>The workstation that fits your workspace</b></p><p>Engineered to impress. The redesigned HP Z230 \r\nSmall Form Factor Workstation provides the capability and flexibility \r\nyou demand in a 57% smaller form factor than the tower.</p><p><b>Rock solid reliability, affordably priced</b></p><p>Built for heavy 24/7/365 workloads, with \r\namazingly flexible storage and IO capabilities, the affordable HP Z230 \r\nTower Workstation efficiently handles all the processes of today’s \r\ndemanding business applications.</p>', 272000, 'file81.png', '2019-02-27'),
(10, 'Microsoft Surface Book', '1', 'Microsoft Surface Book 2 13.5-Inch 2-In-1 Detachable Laptop Intel Core i7-8650U 1.9GHz Processor 8GB RAM 256GB SSD NVIDIA GeForce Graphics Windows 10 Pro HN6-00001', '<p>Microsoft Surface Book 2 13.5-Inch 2-In-1 Detachable Laptop Intel Core i7-8650U 1.9GHz Processor 8GB RAM 256GB SSD NVIDIA GeForce Graphics Windows 10 Pro HN6-00001<br></p>', 727350, 'file92.png', '2019-02-27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_category`
--

CREATE TABLE `tbl_product_category` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `slug` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product_category`
--

INSERT INTO `tbl_product_category` (`id`, `title`, `slug`) VALUES
(1, 'Computers and Accessories', ''),
(2, 'Phones and Tablets', ''),
(3, 'Electronics', ''),
(4, 'Home Appliances', ''),
(5, 'Networking', ''),
(6, 'Office Equipment', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_specification`
--

CREATE TABLE `tbl_product_specification` (
  `specification_id` int(12) NOT NULL,
  `product` int(12) NOT NULL,
  `specification` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product_specification`
--

INSERT INTO `tbl_product_specification` (`specification_id`, `product`, `specification`) VALUES
(4, 8, 'Screen: 1924 x 1080'),
(5, 1, 'Intel Celeron N3050'),
(6, 1, '1.6GHz - 2.6GHz Processor'),
(7, 1, '2 GB RAM'),
(8, 1, '32GB SSD Hard Drive'),
(9, 1, '11.6-Inch Screen'),
(10, 1, 'Intel HD Graphics'),
(11, 1, 'Windows 10'),
(13, 1, '1 Year Warranty'),
(14, 2, '2.8 GHz Intel Core i7-7700HQ Quad-Core'),
(15, 2, '16GB DDR4 RAM | 256GB SSD + 2TB HDD'),
(16, 2, '15.6 Inch 1920 x 1080 Anti-Glare IPS Display'),
(17, 2, 'NVIDIA GeForce GTX 1050 Ti (4GB GDDR5)'),
(18, 2, '802.11ac Wi-Fi | Bluetooth 4.1'),
(19, 2, 'USB 3.0 | USB Type-C | HDMI'),
(20, 2, '720p HD Camera with Array Microphone'),
(21, 2, '14.96\" x 10.43\" x 1.01 Inches, 5.29 lbs'),
(22, 2, 'Windows 10 Home (64-bit)'),
(23, 2, '1 Year Warranty'),
(24, 3, 'Display Type  14-Inch Anti-Glare LCD Display 1920 x 1080 Full HD'),
(25, 3, 'Processor Type  Intel Core i5-6300U Dual-Core'),
(26, 3, 'ClockSpeed  2.5GHz up to 3.0GHz Max turbo Speed'),
(27, 3, 'Memory   4GB 2133 MHz DDR4 RAM'),
(28, 3, 'Storage Capacity   128GB SATA III M.2 SSD'),
(29, 3, 'Graphic Type   Integrated Intel HD Graphics 520'),
(30, 3, 'SD Card Reader / SIM Card Slot'),
(31, 3, 'Wireless   802.11ac Wi-Fi | Bluetooth 4.1'),
(32, 3, 'Ports  USB 3.0 | HDMI | Mini DisplayPort'),
(33, 3, 'Windows 7/10 Pro'),
(34, 3, '1 Year Warranty'),
(35, 4, 'Ultrafast 7 ms response time'),
(36, 4, '23 Inch'),
(37, 4, '5,000,000:1 dynamic contrast ratio (1000:1 static)'),
(38, 4, '250 cd/m² brightness'),
(39, 4, '1920 x 1080 resolution at 60Hz'),
(40, 5, '16:10 Aspect Ratio'),
(41, 5, '2560 x 1600 Resolution'),
(42, 5, '350 cd/m² Brightness'),
(43, 5, '1000:1 Static Contrast Ratio'),
(44, 5, '5000000:1 Dynamic Contrast Ratio'),
(45, 5, '178°/178° (H/V) Viewing Angles'),
(46, 5, '8 ms Response Time'),
(47, 5, 'VGA/DisplayPort/DVI-D/HDMI Input Signals'),
(48, 5, 'Five USB 3.0 Ports'),
(49, 5, '4-Way Adjustable Stand'),
(50, 5, '1 Year Warranty'),
(51, 6, 'Processor Type Intel Pentium J4205'),
(52, 6, 'Clock Speed 1.5GHz'),
(53, 6, 'RAM Size 4GB RAM'),
(54, 6, 'Storage Capacity 500GB HDD'),
(55, 6, 'Graphics Intel Integrated HD Graphics 505'),
(56, 6, '1 x 1 802.11 b/g/n/ac WLAN'),
(57, 6, 'Bluetooth 4.0'),
(58, 6, 'USB Ports : 2 x USB 3.0, 4 x USB 2.0'),
(59, 6, 'Rear I/O Ports: VGA, HDMI'),
(60, 6, '5,71 x 10.83 x 14.17 In'),
(61, 6, '4.8 kg'),
(62, 6, 'Plus 21.5-Inch Screen'),
(63, 6, 'FreeDos'),
(64, 6, '1 Year Warranty'),
(65, 7, 'Processor Type Intel Core i3-7100 Processor'),
(66, 7, 'ClockSpeed  3.9 GHz 3 MB cache 2 cores'),
(67, 7, 'Memory 4GB DDR4-2400 SDRAM'),
(68, 7, 'Storage Capacity 500GB 7200 rpm SATA'),
(69, 7, 'Graphic Type Intel HD Graphics 630'),
(70, 7, 'Optical Drive Slim DVD-Writer '),
(71, 7, 'Chipset Intel Q270'),
(72, 7, '1 SD 4 card reader (optional)'),
(73, 7, 'USB Port  1 USB 3.1 Type-C | 2 USB 3.1 Gen 1 | 2 USB 2.0'),
(74, 7, 'Ports  1 audio in | 1 RJ-45 | 1 audio out | 2 DisplayPort | 1 HDMI'),
(75, 7, 'HP USB Mouse & HP USB Business Slim Keyboard'),
(76, 7, 'Operating System  Windows 10 Pro 64'),
(77, 7, 'Dimensions  9.5 x 27 x 29.6 cm'),
(78, 7, 'Weight  4.53 kg'),
(79, 7, '1 Year Warranty'),
(80, 8, 'Intel® Pentium® G4560 (3.5 GHz, 3 MB cache, 2 cores)'),
(81, 8, 'RAM: 4GB RAM, 500GB HDD'),
(82, 8, 'Intel HD Graphics 610'),
(83, 8, 'HP 6-in-1 Media Card Reader (optional)'),
(84, 8, 'LAN Integrated 10/100/1000M gigabit Ethernet controller'),
(85, 8, '1 HDMI, 1 power connector ,1 RJ-45, 1 VGA, 2 USB 3.0, 4 USB 2.0,'),
(86, 8, '1 security lock slot, 1 audio in connector, 1 audio out connector'),
(87, 8, 'Microsoft Security Essentials (Windows 7), Microsoft Defender (Windows 10)'),
(88, 8, '1 SD reader (optional); One 3.5? HDD; One 9.5 mm slim ODD'),
(89, 8, '1 SD reader (optional); One 3.5? HDD; One 9.5 mm slim ODD'),
(90, 8, 'Weight  5.45 kg'),
(91, 8, 'Windows 10 Professional'),
(92, 8, '1 Year Warranty'),
(93, 9, 'Processor Type Intel Core i5-4590 4th Generation Processor'),
(94, 9, 'Clock Speed 3.3GHz'),
(95, 9, 'Memory Size 4GB DDR3 SDRAM'),
(96, 9, 'Storage Capacity 1TB 7200 rpm SATA Hard Drive'),
(97, 9, 'Graphics Intel HD Graphics 4600'),
(98, 9, 'Optical Drive Slim SATA SuperMulti DVD Burner'),
(99, 9, 'USB Ports 5 x USB 3.0 9 x USB 2.0'),
(100, 9, 'Gigabit Ethernet'),
(101, 9, 'Ports 2 x Display Port DVI'),
(102, 9, 'Dimenions 6.7 x 15.7 x 17.4 inch'),
(103, 9, 'Weight 9.50 kg'),
(104, 9, 'Windows 7 / 8.1 Pro'),
(105, 9, 'Warranty 1 Year'),
(106, 10, 'Display Size   13.5-Inch PixelSense Display (3000 x 2000)'),
(107, 10, 'Processor Type   Intel Core i7-8650U Quad-Core'),
(108, 10, 'ClockSpeed    1.90GHz'),
(109, 10, 'Memory Size    8GB 1866MHz LPDDR3 SDRAM'),
(110, 10, 'Storage Capacity    256GB SSD'),
(111, 10, 'Graphics Type   NVIDIA GeForce GTX 1050 (2GB GDDR5)'),
(112, 10, 'Wireless 802.11ac Wi-Fi | Bluetooth 4.1 LE'),
(113, 10, 'USB Port USB Type-C | USB 3.0 Type-A'),
(114, 10, 'Dual Microphones | 3.5mm headphone jack'),
(115, 10, 'Operating System Windows 10 Pro 64-Bit'),
(116, 10, 'Dimensions 12.3 x 0.9 x 9.1 In'),
(117, 10, 'Weight 1.5 Kg'),
(118, 10, '1 Year Warranty');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `firstName` varchar(45) NOT NULL,
  `lastName` varchar(45) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(15) NOT NULL,
  `confirmPassword` varchar(15) NOT NULL,
  `role_id` int(12) NOT NULL,
  `dateAdded` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `firstName`, `lastName`, `email`, `password`, `confirmPassword`, `role_id`, `dateAdded`) VALUES
(1, 'peter.ayobami', 'Peter', 'Ayobami', 'peter.ayobami@yahoo.com', 'password', 'password', 0, '2019-01-21 17:06:07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_role`
--

CREATE TABLE `tbl_user_role` (
  `role_id` int(12) NOT NULL,
  `user_role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`customer_acc_id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `tbl_product_category`
--
ALTER TABLE `tbl_product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product_specification`
--
ALTER TABLE `tbl_product_specification`
  ADD PRIMARY KEY (`specification_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  ADD PRIMARY KEY (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `customer_acc_id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `prod_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_product_category`
--
ALTER TABLE `tbl_product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_product_specification`
--
ALTER TABLE `tbl_product_specification`
  MODIFY `specification_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  MODIFY `role_id` int(12) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
