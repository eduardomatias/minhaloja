<?php
/**
 * 2007-2016 [PagSeguro Internet Ltda.]
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @author    PagSeguro Internet Ltda.
 * @copyright 2007-2016 PagSeguro Internet Ltda.
 * @license   http://www.apache.org/licenses/LICENSE-2.0
 *
 */

namespace vendor\pagseguro\Domains\Requests\DirectPayment\InternationalCreditCard;

use vendor\pagseguro\Domains\Requests\Currency;
use vendor\pagseguro\Domains\Requests\DirectPayment\CreditCard\Installment;
use vendor\pagseguro\Domains\Requests\DirectPayment\CreditCard\Token;
use vendor\pagseguro\Domains\Requests\DirectPayment\Mode;
use vendor\pagseguro\Domains\Requests\DirectPayment\Sender;
use vendor\pagseguro\Domains\Requests\Item;
use vendor\pagseguro\Domains\Requests\Notification;
use vendor\pagseguro\Domains\Requests\ReceiverEmail;
use vendor\pagseguro\Domains\Requests\Redirect;
use vendor\pagseguro\Domains\Requests\Reference;
use vendor\pagseguro\Domains\Requests\Requests;
use vendor\pagseguro\Domains\Requests\Split;

/**
 * The Request Class for International Credit Card direct payments
 * @package vendor\pagseguro\Domains\Requests\DirectPayment\InternationalCreditCard
 */
class Request implements Requests
{
    use Currency;
    use Installment;
    use Item;
    use Mode;
    use Notification {
        Notification::getUrl as getNotificationUrl;
        Notification::setUrl as setNotificationUrl;
        Notification::getUrl insteadof Redirect;
        Notification::setUrl insteadof Redirect;
    }
    use ReceiverEmail;
    use Sender;
    use Split;
    use Reference;
    use Redirect {
        Redirect::getUrl as getRedirectUrl;
        Redirect::setUrl as setRedirectUrl;
    }
    use Token;
}
