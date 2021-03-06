CREATE TABLE IF NOT EXISTS `gmwfb_mapdetails` (
`gmwfb_id` INT unsigned NOT NULL AUTO_INCREMENT,
`gmwfb_heading` VARCHAR(255) NOT NULL,
`gmwfb_address` VARCHAR(255) NOT NULL,
`gmwfb_latitude` VARCHAR(255) NOT NULL,
`gmwfb_longitude` VARCHAR(255) NOT NULL,
`gmwfb_message` VARCHAR(255) NOT NULL,
`gmwfb_draggable` VARCHAR(3) NOT NULL,
`gmwfb_width` VARCHAR(5) NOT NULL,
`gmwfb_height` VARCHAR(5) NOT NULL,
`gmwfb_zoom` VARCHAR(3) NOT NULL,
`gmwfb_maptype` VARCHAR(10) NOT NULL,
`gmwfb_turnoffscrolling` VARCHAR(3) NOT NULL,
`gmwfb_enablevisualrefresh` VARCHAR(3) NOT NULL,
`gmwfb_imagery` VARCHAR(5) NOT NULL,
`gmwfb_layers` VARCHAR(20) NOT NULL,
`gmwfb_turnoffpan` VARCHAR(3) NOT NULL,
`gmwfb_turnoffzoom` VARCHAR(3) NOT NULL,
`gmwfb_turnoffmaptype` VARCHAR(3) NOT NULL,
`gmwfb_turnoffscale` VARCHAR(3) NOT NULL,
`gmwfb_turnoffstreetview` VARCHAR(3) NOT NULL,
`gmwfb_turnoffoverviewmap` VARCHAR(3) NOT NULL,
`gmwfb_streetview` VARCHAR(3) NOT NULL,
PRIMARY KEY (`gmwfb_id`)
) ENGINE=MyISAM /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci*/;