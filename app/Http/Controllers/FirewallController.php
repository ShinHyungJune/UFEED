<?php

namespace App\Http\Controllers;

use App\Models\FirewallApi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FirewallController extends Controller
{
    private $urls = ['', '10.0.1.254:50015', '10.0.1.2:50015', '10.0.1.3:50015', '10.0.1.4:50015', '10.0.1.5:50015', '10.0.1.6:50015'];

    public function policy(Request $request)
    {
        $firewallApi = new FirewallApi([], $this->getUrl($request));

        $items = $firewallApi->policyIndex();

        return view('user.quick-function.policy.policy_control')->with('items', $items);
    }

    public function interface()
    {
        return view('user.quick-function.interface.interface_control');
    }

    /**
     * @param Request $request
     * @return string
     */
    private function getUrl(Request $request): string
    {
        return $this->urls[Str::after($request->path(), 'fw')];
    }
}
