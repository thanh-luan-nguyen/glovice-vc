<!-- MADE BY LUAN -->

<!-- PLUGIN: SELECT2 -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<link href="../css/calculator/calculator.css" rel="stylesheet">
<link href="../css/calculator/reset-this.css" rel="stylesheet">

<script>
    $(document).ready(function() {
        $('.select-2').select2();

    const API_URL = 'https://v6.exchangerate-api.com/v6/';
    const ACCESS_KEY = '9a27683ae8cde989f5a4b60e';
    const listCurrentPairs = [{
        name: 'AUDCHF',
        value: 'AUD/CHF'
      },
      {
        name: 'AUDJPY',
        value: 'AUD/JPY'
      },
      {
        name: 'AUDCAD',
        value: 'AUD/CAD'
      },
      {
        name: 'AUDNOK',
        value: 'AUD/NOK'
      },
      {
        name: 'AUDNZD',
        value: 'AUD/NZD'
      },
      {
        name: 'AUDSGD',
        value: 'AUD/SGD'
      },
      {
        name: 'AUDSEK',
        value: 'AUD/SEK'
      },
      {
        name: 'AUDUSD',
        value: 'AUD/USD'
      },
      {
        name: 'CADCHF',
        value: 'CAD/CHF'
      },
      {
        name: 'CADJPY',
        value: 'CAD/JPY'
      },
      {
        name: 'CHFDKK',
        value: 'CHF/DKK'
      },
      {
        name: 'CHFJPY',
        value: 'CHF/JPY'
      },
      {
        name: 'CHFPLN',
        value: 'CHF/PLN'
      },
      {
        name: 'CHFNOK',
        value: 'CHF/NOK'
      },
      {
        name: 'CHFSGD',
        value: 'CHF/SGD'
      },
      {
        name: 'EURAUD',
        value: 'EUR/AUD'
      },
      {
        name: 'EURCAD',
        value: 'EUR/CAD'
      },
      {
        name: 'EURCHF',
        value: 'EUR/CHF'
      },
      {
        name: 'EURGBP',
        value: 'EUR/GBP'
      },
      {
        name: 'EURHKD',
        value: 'EUR/HKD'
      },
      {
        name: 'EURHUF',
        value: 'EUR/HUF'
      },
      {
        name: 'EURJPY',
        value: 'EUR/JPY'
      },
      {
        name: 'EURMXN',
        value: 'EUR/MXN'
      },
      {
        name: 'EURNOK',
        value: 'EUR/NOK'
      },
      {
        name: 'EURNZD',
        value: 'EUR/NZD'
      },
      {
        name: 'EURPLN',
        value: 'EUR/PLN'
      },
      {
        name: 'EURSEK',
        value: 'EUR/SEK'
      },
      {
        name: 'EURSGD',
        value: 'EUR/SGD'
      },
      {
        name: 'EURTRY',
        value: 'EUR/TRY'
      },
      {
        name: 'EURUSD',
        value: 'EUR/USD'
      },
      {
        name: 'GBPAUD',
        value: 'GBP/AUD'
      },
      {
        name: 'GBPCAD',
        value: 'GBP/CAD'
      },
      {
        name: 'GBPCHF',
        value: 'GBP/CHF'
      },
      {
        name: 'GBPDKK',
        value: 'GBP/DKK'
      },
      {
        name: 'GBPJPY',
        value: 'GBP/JPY'
      },
      {
        name: 'GBPNOK',
        value: 'GBP/NOK'
      },
      {
        name: 'GBPNZD',
        value: 'GBP/NZD'
      },
      {
        name: 'GBPPLN',
        value: 'GBP/PLN'
      },
      {
        name: 'GBPSGD',
        value: 'GBP/SGD'
      },
      {
        name: 'GBPSEK',
        value: 'GBP/SEK'
      },
      {
        name: 'GBPUSD',
        value: 'GBP/USD'
      },
      {
        name: 'GBPZAR',
        value: 'GBP/ZAR'
      },
      {
        name: 'HKDJPY',
        value: 'HKD/JPY'
      },
      {
        name: 'MXNJPY',
        value: 'MXN/JPY'
      },
      {
        name: 'NOKJPY',
        value: 'NOK/JPY'
      },
      {
        name: 'NOKSEK',
        value: 'NOK/SEK'
      },
      {
        name: 'NZDCAD',
        value: 'NZD/CAD'
      },
      {
        name: 'NZDCHF',
        value: 'NZD/CHF'
      },
      {
        name: 'NZDJPY',
        value: 'NZD/JPY'
      },
      {
        name: 'NZDSGD',
        value: 'NZD/SGD'
      },
      {
        name: 'NZDUSD',
        value: 'NZD/USD'
      },
      {
        name: 'SEKJPY',
        value: 'SEK/JPY'
      },
      {
        name: 'SGDJPY',
        value: 'SGD/JPY'
      },
      {
        name: 'TRYJPY',
        value: 'TRY/JPY'
      },
      {
        name: 'USDCAD',
        value: 'USD/CAD'
      },
      {
        name: 'USDCHF',
        value: 'USD/CHF'
      },
      {
        name: 'USDCNH',
        value: 'USD/CNH'
      },
      {
        name: 'USDCZK',
        value: 'USD/CZK'
      },
      {
        name: 'USDDKK',
        value: 'USD/DKK'
      },
      {
        name: 'USDHKD',
        value: 'USD/HKD'
      },
      {
        name: 'USDHUF',
        value: 'USD/HUF'
      },
      {
        name: 'USDJPY',
        value: 'USD/JPY'
      },
      {
        name: 'USDMXN',
        value: 'USD/MXN'
      },
      {
        name: 'USDNOK',
        value: 'USD/NOK'
      },
      {
        name: 'USDPLN',
        value: 'USD/PLN'
      },
      {
        name: 'USDRUB',
        value: 'USD/RUB'
      },
      {
        name: 'USDSEK',
        value: 'USD/SEK'
      },
      {
        name: 'USDSGD',
        value: 'USD/SGD'
      },
      {
        name: 'USDTRY',
        value: 'USD/TRY'
      },
      {
        name: 'USDZAR',
        value: 'USD/ZAR'
      },
      {
        name: 'ZARJPY',
        value: 'ZAR/JPY'
      }
    ];
    let accountCurrency = 'USD';

    for (const item of listCurrentPairs) {
      const option = `<option value=${item.value} ${item.value==="USD/JPY"?"selected":""}> ${item.name} </option>`
      $('#pair').append(option);
    }

    async function getExchangeRate(base, second) {
      try {
        const data = await $.ajax({
          url: `${API_URL}${ACCESS_KEY}/pair/${base}/${second}`,
          method: 'GET'
        });
        console.log(data.conversion_rate)
        return data.conversion_rate;
      } catch (error) {
        throw new Error(error);
      }
    }

    async function calculate(base, second, accountCurrency, volume, leverage) {
      // const onePip = await getOnePip(base, second);
      // const pipValue = (volume * onePip) * exchangeRateForPip * 100000;

      const exchangeRateForMargin = await getExchangeRate(base, accountCurrency);
      const exchangeRateForPip = await getExchangeRate(second, accountCurrency);
      const marginValue = Math.round((((volume * 100000) / leverage * exchangeRateForMargin) + Number.EPSILON) * 100) / 100;
      let pipValue = Math.round(((0.0001 * exchangeRateForPip * (volume * 100000)) + Number.EPSILON) * 10000) / 10000;

      if (second === "JPY") {
        pipValue = pipValue * 100;
      }

      $("#demonstrate").html(`<strong>???Exchange rate (${base}/${second})</strong> = ${await getExchangeRate(base, second)} <br/> <strong>???Exchange rate (${second}/${accountCurrency})</strong> = ${exchangeRateForPip}`);

      return {
        marginValue,
        pipValue
      }
    }

    $('#btn-calculate').on('click', async function() {
      let leverage, volume, rate;
      let base = '';
      let second = '';

      // split pair to get base and second
      let pair = $('#pair').val();
      base = pair.substring(0, 3);
      second = pair.substring(4, pair.length);
      // get rate
      $.ajax({
        url: `${API_URL}${ACCESS_KEY}/pair/${pair}`,
        success: (res) => {
          rate = res.conversion_rate;
        },
        error: (error) => {
          throw new Error(error);
        }
      })
      // get volume
      volume = $('#volume').val();
      // get leverage
      leverage = Number.parseInt($("#leverage").val());

      const {
        pipValue,
        marginValue
      } = await calculate(base, second, accountCurrency, volume, leverage);

      $("#margin").text(marginValue);
      $("#pip").text(pipValue);
    })
    });
</script>

<div class="outermost-container">
    <section class="intro">
        <h2>M???t c??ng c??? h???u ??ch gi??p b???n nhanh ch??ng v?? d??? d??ng ?????c t??nh l???i nhu???n ti???m n??ng v?? qu???n l?? r???i ro tr?????c khi th???c hi???n b???t k??? giao d???ch ngo???i h???i n??o.</h2>
        <h3>S??? d???ng ????n gi???n, nh???p v??o T??nh to??n ????? nh???n ???????c k???t qu??? c???n thi???t c???a b???n.</h3>
    </section>
    <section class="main">
        <div class="upper">
            <div>
                <label for="pair">C???p ti???n t???</label>
                <select name="pair" id="pair" class="select-2 reset-this">
                    <option value="none">---</option>
                </select>
            </div>
            <div>
                <label for="leverage">????n b???y</label>
                <select name="leverage" id="leverage" class="select-2 reset-this">
                    <option value="none"> --- </option>
                    <option value="2">1/2</option>
                    <option value="5" selected>1/5</option>
                    <option value="10">1/10</option>
                    <option value="20">1/20</option>
                    <option value="100">1/100</option>
                </select>
            </div>
            <div class="volume">
                <label for="volume">Kh???i l?????ng(lots)</label>
                <input id="volume" type="number" max="1000" min="0.01" step="0.01" value="0.01">
            </div>
            <div>
                <label for="currency">????n v??? ti???n t??? c???a t??i kho???n</label>
                <select name="currency" id="currency" class="select-2 reset-this">
                    <option value="USD">USD</option>
                </select>
            </div>
        </div>
        <div class="middle">
            <button id="btn-calculate">T??nh to??n</button>
        </div>
        <div class="lower">
            <div>
                <label>Gi?? tr??? PIP (USD)</label>
                <span id="pip"></span>
            </div>
            <div>
                <label>????n b???y (USD)</label>
                <span id="margin"></span>
            </div>
        </div>
        <div id="disclaimer">* Xin l??u ?? k???t qu??? n??y ch??? l?? ?????c t??nh v?? mang t??nh ch???t tham kh???o.</div>
    </section>
    <section class="description">
        <div class="computation">
            <h2>C??ng th???c t??nh to??n</h2>
            <ul>
                <li><strong>??? K?? qu??? y??u c???u</strong> = Kh???i l?????ng giao d???ch / ????n b???y * T??? gi?? h???i ??o??i ti???n t??? t??i kho???n (ti???n t??? c?? s??? / ti???n t??? t??i kho???n)</li>
                <li><strong>??? Gi?? tr??? Pip</strong> = 1 pip * T??? gi?? h???i ??o??i (ti???n t??? th??? c???p / ti???n t??? t??i kho???n) * Kh???i l?????ng giao d???ch</li>
                <li id="demonstrate"></li>
            </ul>
        </div>
        <div class="definition">
            <h2>K?? qu??? v?? pip l?? g?? v?? ch??ng ho???t ?????ng nh?? th??? n??o?</h2>
            <ul>
                <li><strong>??? K?? qu??? -</strong>L?? s??? v???n t???i thi???u hay s??? d?? c???n thi???t ????? duy tr?? v??? th??? giao d???ch c???a b???n.</li>
                <li><strong>??? Gi?? tr??? Pip -</strong>
                    Gi?? tr??? n??y x??c ?????nh gi?? tr??? c???a 1 pip, gi??p t??nh to??n s??? ti???n m?? m???t nh?? giao d???ch s??? ki???m ???????c ho???c b??? m???t, n???u gi?? c???a m???t giao d???ch thay ?????i theo m???t pip. Gi?? tr??? pip ???????c t??nh b???ng ????n v??? ti???n t??? b??o gi?? v???i c??ng th???c: Kh???i l?????ng giao d???ch x K??ch th?????c h???p ?????ng x K??ch th?????c Pip.
                </li> 
            </ul>
        </div>
    </section>
</div>
