<?php

namespace App\Console\Commands;

use App\Models\Institution\Integration;
use Illuminate\Console\Command;

class CreateIntegration extends Command
{
    protected $signature = 'raki:create-api-integration {site_name} {domain}';

    protected $description = 'Create a new Raki Integration with a generated API key';

    public function handle()
    {
        $site = $this->argument('site_name');
        $domain = $this->argument('domain');

        $integration = Integration::create([
            'site_name' => $site,
            'domain' => $domain,
        ]);

        $this->info("Created integration:");
        $this->line("Site: {$integration->site_name}");
        $this->line("Domain: {$integration->domain}");
        $this->line("API Key: {$integration->api_key}");
    }
}
