@include('common.header', [
    'namespace' => 'Tarik02\Telegram',
])

/**
 * Trait TelegramTypes
 *
 * {{ '@' }}package Tarik02\Telegram
 */
final class TelegramTypes
{
    const VERSION = [
        'major' => {{ $version['major'] }},
        'minor' => {{ $version['minor'] }},
        'patch' => {{ $version['patch'] }},
    ];
    const RECENT_CHANGES = [
        'year' => {{ $recentChanges['year'] }},
        'month' => {{ $recentChanges['month'] }},
        'day' => {{ $recentChanges['day'] }},
    ];

    private function __construct()
    {
    }
}
