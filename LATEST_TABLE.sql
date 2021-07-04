
CREATE TABLE `staff` (
  `staff_id` int(8) NOT NULL,
  `staff_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `staff_password` varchar(64) NOT NULL,
  `staff_email` varchar(255) CHARACTER SET utf8 NOT NULL,
primary key (staff_id)
) ENGINE=InnoDB CHARACTER SET=utf8; 

CREATE TABLE `tbl_token_auth` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `selector_hash` varchar(255) NOT NULL,
  `is_expired` int(11) NOT NULL DEFAULT '0',
  `expiry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
primary key(id)
) ENGINE=InnoDB CHARACTER SET=utf8; 

ALTER TABLE `staff`
  MODIFY `staff_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `tbl_token_auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;


CREATE TABLE `supplier` (
  `supplier_id` int(8) NOT NULL,
  `supplier_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `supplier_email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `supplier_phoneno` varchar(15) CHARACTER SET utf8 NOT NULL,
  `supplier_nobank` varchar(15) CHARACTER SET utf8 NOT NULL,
primary key (supplier_id)
) ENGINE=InnoDB CHARACTER SET=utf8; 

ALTER TABLE `supplier`
  MODIFY `supplier_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

CREATE TABLE `cashier` (
  `cashier_id` int(8) NOT NULL,
  `cashier_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `cashier_password` varchar(64) NOT NULL,
  `cashier_email` varchar(255) CHARACTER SET utf8 NOT NULL,
primary key (cashier_id)
) ENGINE=InnoDB CHARACTER SET=utf8; 

ALTER TABLE `cashier`
  MODIFY `cashier_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

create table Product(
ProductCode varchar(10),
supplier_id int(8),
ProductName varchar(30) not null,
ProductType varchar(20),
Price double,
Quantity int,
foreign key (supplier_id) references Supplier (supplier_id) ON DELETE CASCADE ON UPDATE CASCADE,
primary key (ProductCode)
)ENGINE=InnoDB CHARACTER SET=utf8;


INSERT INTO `staff`(`staff_id`, `staff_name`, `staff_password`, `staff_email`) VALUES
(1, 'admin', '$2a$10$0FHEQ5/cplO3eEKillHvh.y009Wsf4WCKvQHsZntLamTUToIBe.fG', 'user@gmail.com');