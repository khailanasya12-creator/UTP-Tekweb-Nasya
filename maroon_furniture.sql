-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for maroon_furniture
CREATE DATABASE IF NOT EXISTS `maroon_furniture` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `maroon_furniture`;

-- Dumping structure for table maroon_furniture.produk
CREATE TABLE IF NOT EXISTS `produk` (
  `id_barang` int NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(300) DEFAULT NULL,
  `harga` int DEFAULT NULL,
  `deskripsi_singkat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `kategori` varchar(200) DEFAULT NULL,
  `stok` varchar(100) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `deskripsi_panjang` text,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table maroon_furniture.produk: ~12 rows (approximately)
INSERT INTO `produk` (`id_barang`, `nama_barang`, `harga`, `deskripsi_singkat`, `kategori`, `stok`, `gambar`, `deskripsi_panjang`) VALUES
	(1, 'Folder Map', 50000, 'Durable folder map for organizing and protecting important documents.', 'atk', '999', 'folder-map.jpg', 'This folder map is designed to keep your documents neat, organized, and protected. Made from high-quality materials, it is resistant to tearing and suitable for daily office use. Ideal for storing reports, files, and important paperwork, making document management more efficient.'),
	(2, 'Highlighter', 60000, 'Bright highlighter for marking important text clearly.', 'atk', '789', 'highlighter.jpg', 'This highlighter features vibrant, quick-drying ink that makes important text stand out instantly. Its smooth tip ensures even application without smudging, making it perfect for studying, office work, or presentations.'),
	(5, 'File Clipper', 40000, 'Handy clipper for keeping documents securely together.', 'atk', '97', 'file-cliper.jpg', 'This file clipper is a simple yet effective solution for organizing loose papers. Its strong grip ensures documents stay in place, while its compact design makes it easy to carry and use in any workspace.'),
	(6, 'Set Table (include projector)', 1200000, 'Complete meeting table set with integrated projector support.', 'furniture', '68', 'set-meja-dengan-infokus.jpg', 'This meeting table set is designed to enhance collaboration and presentation efficiency. Equipped with projector compatibility, it creates a professional meeting environment suitable for offices and conference rooms.'),
	(7, 'Meeting Table', 3199000, 'Elegant meeting table for productive discussions.', 'furniture', '188', 'meja-rapat.jpg', 'Crafted from high-quality materials, this meeting table offers a spacious and comfortable surface for team discussions. Its elegant design adds a professional touch to any workspace.'),
	(8, 'Employee Desk', 800000, 'Modern desk designed for daily work comfort.', 'furniture', '56', 'meja-karyawan.jpg', 'This employee desk combines functionality and style, providing a comfortable workspace for daily tasks. Its sturdy construction and ergonomic design help improve productivity and organization.'),
	(9, 'Executive Table', 7000000, 'Premium desk with a sophisticated and professional look.', 'furniture', '74', 'meja-pimpinan.jpg', 'Designed for executives, this desk features a luxurious finish and spacious layout. It enhances authority and professionalism while providing ample space for work essentials.'),
	(10, 'Office Chair', 1100000, 'Comfortable ergonomic chair for long working hours.', 'funiture', '199', 'kursi.jpg', 'This office chair is built with ergonomic support to ensure maximum comfort during long working hours. It features soft cushioning, adjustable height, and smooth mobility for better productivity.'),
	(11, 'Sofa Corner', 2699000, 'Stylish corner sofa for relaxing office spaces.', 'furniture', '232', 'sofa-corner.jpg', 'This corner sofa adds both comfort and elegance to your office or lounge area. Designed with soft cushioning and a modern look, it creates a welcoming atmosphere for guests and employees.'),
	(12, 'Multipurpose Rack Display', 999000, 'Practical storage rack for various office needs.', 'furniture', '135', 'rak-dokumen.jpg', 'This multipurpose rack is perfect for organizing files, books, and office supplies. Its durable structure and simple design make it a versatile addition to any workspace.'),
	(13, 'Marker', 44000, 'Versatile marker for writing on various surfaces.', 'atk', '145', 'marker.jpg', 'This marker is designed for smooth and consistent writing on whiteboards, paper, and other surfaces. With bold ink and quick-drying features, it is perfect for presentations, brainstorming sessions, and creative work.'),
	(15, 'Strapler', 42000, 'Strong and reliable stapler for everyday document binding.', 'atk', '459', 'strapler.jpg', 'Built for durability and efficiency, this stapler provides strong and secure binding for your documents. Its ergonomic design ensures comfortable use, while its sturdy mechanism makes it suitable for both light and heavy office tasks.');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
