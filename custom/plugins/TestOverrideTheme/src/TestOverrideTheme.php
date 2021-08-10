<?php declare(strict_types = 1);

	namespace TestOverrideTheme;

	use Shopware\Core\Framework\Plugin;
	use Shopware\Storefront\Framework\ThemeInterface;

	class TestOverrideTheme extends Plugin implements ThemeInterface {
		public function getThemeConfigPath(): string {
			return 'theme.json';
		}
	}