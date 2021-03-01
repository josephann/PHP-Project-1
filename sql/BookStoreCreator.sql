CREATE DATABASE Bookstore;

CREATE TABLE IF NOT EXISTS `products` (
  `p_id` int(10) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_quantity` int(10) NOT NULL,
  `p_image` varchar(255) DEFAULT NULL,
  `p_price` int(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `users` (
  `u_id` int(10) NOT NULL,
  `u_firstname` varchar(20) NOT NULL,
  `u_address` varchar(80) NOT NULL,
  `u_city` varchar(30) NOT NULL,
  `p_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);
ALTER TABLE `products`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
ALTER TABLE `users`
  MODIFY `u_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
