@extends('layouts.app')
@include('navbar')
@include('sidebar')
@include('footer')

@section('content')
<div class="row">
<img class="img-fluid" src="/images/banner.jpg">
</div>
<div class="col-md-10 col-md-2 mx-auto">
  <div class="card-wrap">

    <h2>プライバシーポリシー</h2>
    <p>本プライバシーポリシーは、いいねメモ（https://iinememo.net/）（以下、「当サイト」とします。)の各種サービス（当サイトによる情報提供、各種お問合せの受付等）において、当サイトの訪問者（以下、「訪問者」とします。）の個人情報もしくはそれに準ずる情報を取り扱う際に、当サイトが遵守する方針を示したものです。</p>
    <h3>1．基本方針</h3>
        <p>当サイトは、個人情報の重要性を認識し、個人情報を保護することが社会的責務であると考え、個人情報に関する法令を遵守し、当サイトで取扱う個人情報の取得、利用、管理を適正に行います。当サイトで収集した情報は、利用目的の範囲内で適切に取り扱います。</p>
    <h3>2．適用範囲</h3>
        <p>本プライバシーポリシーは、当サイトにおいてのみ適用されます。</p>
    <h3>3．個人情報の取得と利用目的</h3>
        <p>当サイトで取得する訪問者の個人情報と利用目的、保存期間等は下記の通りです。</p>
        <h4>3-1．コメントを残した際に個人情報を取得します</h4>
            <p>当サイトでは、訪問者が当サイトにコメントを残した際に、以下の個人情報を取得します。</p>
            <ul>
                <li>コメントに表示されている名前（HN）</li>
                <li>コメントフォームに表示されているコメント内容</li>
                <li>IPアドレス</li>
                <li>ブラウザユーザーエージェント文字列</li>
            </ul>
            <h5>3-1-1．利用目的について</h5>
                <p>荒し対策やスパム検出に役立てるためと、訪問者の利便性のためです。</p>
            <h5>3-1-2．保存期間について</h5>
                <p>当サイトに残されたコメントは、コメントとそのメタデータを５年間保存します。</p>
        <h4>3-2．お問い合せされた個人情報を取得します</h4>
            <p>当サイトではお問い合わせフォーム（あなたのサイトのお問い合わせフォームのURLを貼る）を設けています。</p>
            <p>訪問者がそのお問い合わせフォームから問い合わせをされた際に入力された、以下の個人情報を取得します。</p>
            <ul>
                <li>お問い合わせフォームに入力された名前（HN）</li>
                <li>お問い合わせフォームに入力されたメールアドレス</li>
                <li>お問い合わせフォームに入力されたお問合せ内容</li>
            </ul>
            <h5>3-2-1．利用目的について</h5>
                <p>お問い合わせ対応をするためと、訪問者の管理のためです。訪問者からのお問い合わせ情報を保存しておくことによって、同じ訪問者が別のお問い合わせをした際に、過去の問い合わせ内容を踏まえた対応をすることが出来、より的確な対応をすることが出来ます。</p>
                <p>また、当サイト内で「このようなお問合せがありました」と紹介させていただく場合もあります。</p>
            <h5>3-2-2．保存期間について</h5>
                <p>お問い合わせフォームに入力された個人情報は、５年間保存します。</p>
            <h5>3-2-3．個人情報取得の同意について</h5>
                <p>当サイトでは、お問い合わせフォームからお問い合わせをする前に、当プライバシーポリシーをご一読いただくよう案内しています。</p>
                <p>お問い合わせをされた時点で、その訪問者は当プライバシーポリシーに同意されたとみなします。</p>
        <h4>3-3．Cookieによる個人情報の取得</h4>
            <p>当サイトは、訪問者のコンピュータにCookieを送信することがあります。</p>
            <p>Cookie（クッキー）とは、ウェブサイトを利用したときに、ブラウザとサーバーとの間で送受信した利用履歴や入力内容などを、訪問者のコンピュータにファイルとして保存しておく仕組みです。</p>
            <h5>3-3-1．利用目的について</h5>
                <p>訪問者の当サイト閲覧時の利便性を高めるためです。</p>
                <p>たとえば、次回同じページにアクセスするとCookieの情報を使って、ページの運営者は訪問者ごとに表示を変えることができます。</p>
                <p>たとえばあるサイトを利用していて、初回はログインパスワードを入力する画面が表示されたけど、2回目以降はログイン画面は表示されずにアクセスできた、という経験ありませんか？それはCookieによるものです。</p>
                <p>訪問者がブラウザの設定でCookieの送受信を許可している場合、ウェブサイトは、訪問者のブラウザからCookieキーを取得できます。</p>
                <p>なお、訪問者のブラウザはプライバシー保護のため、そのウェブサイトのサーバーが送受信したCookieのみを送信します。</p>
            <h5>3-3-2．保存期間について</h5>
                <p>当サイトに残されたコメントの Cookie は、1年間保存されます。</p>
            <h5>3-3-3．第三者によるCookie情報の取得について</h5>
                <p>当サイトでは、グーグル株式会社やヤフー株式会社などをはじめとする第三者から配信される広告が掲載される場合があり、これに関連して当該第三者が訪問者のCookie情報等を取得して、利用している場合があります。</p>
                <p>当該第三者によって取得されたCookie情報等は、当該第三者のプライバシーポリシーに従って取り扱われます。</p>
            <h5>3-3-4．第三者へのCooke情報等の広告配信の利用停止について</h5>
                <p>訪問者は、当該第三者のウェブサイト内に設けられたオプトアウト（個人情報を第三者に提供することを停止すること）ページにアクセスして、当該第三者によるCookie情報等の広告配信への利用を停止することができます。</p>
            <h5>3-3-5．Cookie情報の送受信の許可・拒否について</h5>
                <p>訪問者は、Cookieの送受信に関する設定を「すべてのCookieを許可する」、「すべてのCookieを拒否する」、「Cookieを受信したらユーザーに通知する」などから選択できます。設定方法は、ブラウザにより異なります。Cookieに関する設定方法は、お使いのブラウザの「ヘルプ」メニューでご確認ください。</p>
                <p>すべてのCookieを拒否する設定を選択されますと、認証が必要なサービスを受けられなくなる等、インターネット上の各種サービスの利用上、制約を受ける場合がありますのでご注意ください。</p>
    <h3>4．個人情報の管理</h3>
        <p>当サイトは、訪問者からご提供いただいた情報の管理について、以下を徹底します。</p>
        <h4>4-1. 安全管理措置</h4>
            <p>当サイトは、個人情報の漏えいや滅失又は棄損を防止するために、適切なセキリュティ対策を実施して個人情報を保護します。</p>
        <h4>4-2. 個人情報の廃棄</h4>
            <p>個人情報が不要となった場合には、すみやかに廃棄します。</p>
    <h3>5．個人情報の第三者への提供について</h3>
        <p>当サイトは、訪問者からご提供いただいた個人情報を、訪問者本人の同意を得ることなく第三者に提供することはありません。また、今後第三者提供を行うことになった場合には、提供する情報と提供目的などを提示し、訪問者から同意を得た場合のみ第三者提供を行います。</p>
    <h3>6．未成年の個人情報について</h3>
        <p>未成年者が当サイトにコメントをしたり、お問い合わせフォームから問い合わせをされたりする場合は必ず親権者の同意を得るものとし、コメントやお問い合わせをされた時点で、当プライバシーポリシーに対して親権者の同意があるものとみなします。</p>
    <h3>7．お問い合わせ先</h3>
        <p>当サイト、又は個人情報の取扱いに関しては、下記のメールアドレスにてお問い合わせください。</p>
        <p>当サイト運営者：福山琴梨
        <p>メールアドレス：kotorif★gmali.com（★を@に置き換えて下さい）
    <h3>8．アクセス解析ツールについて</h3>
        <p>当サイトでは、Googleによるアクセス解析ツール「Googleアナリティクス」を利用しています。</p>
        <p>このGoogleアナリティクスはアクセス情報の収集のためにCookieを使用しています。このアクセス情報は匿名で収集されており、個人を特定するものではありません。</p>
        <p>GoogleアナリティクスのCookieは、26ヶ月間保持されます（個々のGoogle Analytics の設定によります）。この機能はCookieを無効にすることで収集を拒否することが出来ますので、お使いのブラウザの設定をご確認ください。</p>
        <p>Googleアナリティクスの利用規約に関して確認したい場合は、ここをクリックしてください。また、「ユーザーが Google パートナーのサイトやアプリを使用する際の Google によるデータ使用」に関して確認したい場合は、ここをクリックしてください。</p>
    <h3>9．第三者配信の広告サービスについて</h3>
        <p>当サイトは、第三者配信の広告サービス「Google Adsense（グーグルアドセンス）」を利用しています。
        <p>Googleなどの第三者広告配信事業者は、訪問者の興味に応じた広告を表示するために、Cookie（当サイトの訪問者が当サイトや他のサイトにアクセスした際の情報など）を使用することがあります。</p>
        <p>訪問者は、広告設定で訪問者に合わせた広告（以下、「パーソナライズド広告」とします。）を無効にすることが出来ます。その設定をする場合は、こちらをクリックしてください。また、www.aboutads.info にアクセスすれば、パーソナライズド広告に使われる第三者配信事業者の Cookie を無効にできます。</p>
        <p>第三者配信による広告掲載を無効にしていない場合は、第三者配信事業者や広告ネットワークの配信する広告がサイトに掲載されることがあります。</p>
        <p>Googleによって広告の第三者配信が認められている広告配信事業者の詳細は、ここをクリックしてください。</p>
    <h3>10．Amazonの広告配信について</h3>
        <p>あなたのサイト名は、Amazon.co.jpを宣伝しリンクすることによってサイトが紹介料を獲得できる手段を提供することを目的に設定されたアフィリエイトプログラムである、Amazonアソシエイト・プログラムの参加者です。</p>
        <p>第三者（Amazonや他の広告掲載者）がコンテンツおよび宣伝を提供し、訪問者から直接情報を収集し、訪問者のブラウザにCookieを設定したり、認識したりする場合があります。</p>
    <h3>11．プライバシーポリシーの変更について</h3>
        <p>当サイトは、個人情報に関して適用される日本の法令を遵守するとともに、本プライバシーポリシーの内容を適宜見直しその改善に努めます。修正された最新のプライバシーポリシーは常に本ページにて開示されます。</p>
    <p>2020年5月1日　策定</p>
    </div>
</div>
@endsection
