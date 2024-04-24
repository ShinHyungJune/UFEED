<?php

namespace App\Http\Controllers;

use App\Http\Requests\PolicyRequest;
use App\Models\FirewallApi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FirewallController extends Controller
{
    private $urls = ['', 'https://10.0.1.254:50015', 'https://10.0.1.2:50015', 'https://10.0.1.3:50015', 'https://10.0.1.4:50015', 'https://10.0.1.5:50015', 'https://10.0.1.6:50015'];

    public function policy(Request $request)
    {
        $firewallApi = new FirewallApi([], $this->getUrl($request->path()));
        $items = $firewallApi->policyIndex();

        return view('user.quick-function.policy.policy_control')->with('items', $items);
    }

    public function policyCreate()
    {
        return view('user.quick-function.policy.policy_control_add');
    }

    public function policyStore(PolicyRequest $request)
    {
        $validated = $request->validated();
        $validated['index'] = 0;

        $firewallApi = new FirewallApi([], $this->getUrl($request->path()));
        $firewallApi->policyStore($validated);

        return redirect()->route('firewall.policy', explode('/', request()->path())[2]);
    }

    public function interface()
    {
        return view('user.quick-function.interface.interface_control');
    }

    /**
     * @param string $path
     * @return string
     */
    private function getUrl(string $path): string
    {
        return $this->urls[Str::after($path, 'fw')];
    }
}
