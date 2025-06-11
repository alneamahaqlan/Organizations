<?php

namespace App\Enums;

enum FooterItemType: string
{
    case Link = 'link';
    case Text = 'text';
    case Icon = 'icon';
    case IconLink = 'icon_link';
    case IconText = 'icon_text';
    case IconTextLink = 'icon_text_link';
    case Image = 'image';

    public function label(): string
    {
        return match ($this) {
            self::Link => 'Link',
            self::Text => 'Text',
            self::Icon => 'Icon',
            self::IconLink => 'Icon + Link',
            self::IconText => 'Icon + Text',
            self::IconTextLink => 'Icon + Text + Link',
            self::Image => 'Image',
        };
    }
}
