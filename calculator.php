<!-- MADE BY LUAN -->

<!-- PLUGIN: SELECT2 -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<link href="css/calculator/calculator.css" rel="stylesheet">
<link href="css/calculator/reset-this.css" rel="stylesheet">

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

      $("#demonstrate").html(`<strong>・Exchange rate (${base}/${second})</strong> = ${await getExchangeRate(base, second)} <br/> <strong>・Exchange rate (${second}/${accountCurrency})</strong> = ${exchangeRateForPip}`);

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
    <h2>A powerful tool that helps you quickly and easily estimate your potential profit and manage risk before making any trading forex.</h2>
    <h3>Simple to use, click Calculate to get your necessary results.</h3>

  </section>
  <section class="main">
    <div class="upper">
      <div>
        <label for="pair">Currency Pair</label>
        <select name="pair" id="pair" class="select-2 reset-this">
        </select>
      </div>
      <div>
        <label for="leverage">Leverage</label>
        <select name="leverage" id="leverage" class="select-2 reset-this">
          <option value="none"> --- </option>
          <option value="1">1/1</option>
          <option value="2">1/2</option>
          <option value="5" selected>1/5</option>
          <option value="10">1/10</option>
          <option value="20">1/20</option>
          <option value="100">1/100</option>
        </select>
      </div>
      <div class="volume">
        <label for="volume">Volume (lots)</label>
        <input id="volume" type="number" max="1000" min="0.01" step="0.01" value="0.01">
      </div>
      <div>
        <label for="currency">Account Currency</label>
        <select name="currency" id="currency" class="select-2 reset-this">
          <option value="USD">USD</option>
        </select>
      </div>
    </div>
    <div class="middle">
      <button id="btn-calculate">Calculate</button>
    </div>
    <div class="lower">
      <div>
        <label>PIP value (USD)</label>
        <span id="pip"></span>
      </div>
      <div>
        <label>Margin (USD)</label>
        <span id="margin"></span>
      </div>
    </div>
    <div id="disclaimer">* The calculated results shown here are approximate and for reference only.</div>
  </section>
  <section class="description">
    <div class="computation">
      <h2>Computation</h2>
      <ul>
        <li><strong>• Required Margin</strong> = Trade Size / Leverage * Account Currency Exchange Rate(base currency/ account currency)</li>
        <li><strong>• Pip Value</strong> = 1 pip * Exchange rate (secondary currency/ account currency) * lot volume</li>
        <li id="demonstrate"></li>
      </ul>
    </div>
    <div class="definition">
      <h2>What are margin and pip and how do they work?</h2>
      <ul>
        <li><strong>• Margin -</strong> This the required capital, or balance, that is needed to maintain your open position.</li>
        <li><strong>• Pip value -</strong> This determines the value of 1 pip, which helps to calculate how much money a trader will earn, or lose, if the price of a trade were to move by a pip. The pip value is calculated in quote currency with the formula, Lots x Contract size x Pip Size.</li>
      </ul>
    </div>
  </section>
</div>